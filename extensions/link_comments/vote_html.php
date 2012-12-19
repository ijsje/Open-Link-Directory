<?php
class Vote_HTML
{
	var $on_or_off;
	var $rate_title;
	var $separator;


	//Constructor
	function Vote_HTML($onoff,  $r_title='Rate this comment', $sep=' | ')
	{
		$this->on_or_off = $onoff;
		$this->rate_title = $r_title;
		$this->separator = $sep;
	}

	function get_rate_text()
	{
		return '<br />' .$this->rate_title. '<br />';
	}

	function rate_html($id, $score)
	{
		global $settings;
		if($score=='report')
			$href_text = 'Report this comment';
		elseif($score=='good')
			$href_text = 'Good';
		elseif($score=='report')
			$href_text = 'Bad';
		else
			$href_text = $score;

		return '<a href="' .$settings['domain']. '/index.php?comments='.$_REQUEST['comments']. '&amp;rate=' .$id. '&amp;score=' .$score. '">' .$href_text. '</a>';
	}

	function multi_rate_html($id, $number_of_options)
	{
		$html_string = $this->rate_html($id, 1);
		for($score = 2; $score<=$number_of_options; $score++)
		{
			$html_string .= $this->separator. $this->rate_html($id, $score);
		}
		return $html_string;
	}

	function rate_code($id, $count=0, $avg=0)
	{
		if($this->on_or_off == false)
			return '';
		else
		{
			global $db, $settings, $error;
			
			$ip_sql = $db->query_build(array(
				'SELECT' => 'id',
				'FROM' => 'comments_votes',
				'WHERE' => 'ip="' .$_SERVER['REMOTE_ADDR'].
					'" AND comment_id='.$id
			));
			
			$avg_sql = $db->fetch_row($db->query_build(array(
				'SELECT' => 'COUNT(rating), AVG(rating)',
				'FROM' => 'comments_votes',
				'WHERE' => 'comment_id='.$id
			)));
			$count = $avg_sql[0];
			$avg = $avg_sql[1];
			
			switch($settings['use_comment_rating'])
			{
				case '-2' :
					$rate_html = '<br />' .$this->rate_html($id, 'report');
					break;
				case '-1' :
					$show_rate = '<br />'
						.$count.
						' have marked this comment as bad';
					$rate_html = $this->get_rate_text().
						$this->rate_html($id, 'bad');
					break;
				case '1' :
					$show_rate = '<br />'
						.$count.
						' have marked this comment as good';
					$rate_html = $this->get_rate_text(). $this->rate_html($id, 'good');
					break;
				case '1-2' :
					$show_rate = '<br />'
						.$count.
						' have marked this comment as good';
					$rate_html = $this->get_rate_text().
						$this->rate_html($id, 'good').
						$this->separator.
						$this->rate_html($id, 'report');
					break;
				case '1-1' :
					$show_rate = '<br />Current rating: '
						.$avg.
						' of maximum 1 from '
						.$count.
						' voters ';
					$rate_html = $this->get_rate_text(). 
						$this->rate_html($id, 'good').
						$this->separator.
						$this->rate_html($id, 'bad');
					break;
				case '5' :
					$show_rate = '<br />Current rating: '
						.$avg.
						' of maximum 5 from '
						.$count.
						' voters ';
					$rate_html = $this->get_rate_text().
						$this->multi_rate_html($id, 5);
					break;
				case '5-2' :
					$show_rate = '<br />Current rating: '
						.$avg.
						' of maximum 5 from '
						.$count.
						' voters ';
					$rate_html = $this->get_rate_text().
						$this->multi_rate_html($id, 5).
						$this->separator.
						$this->rate_html($id, 'report');
					break;
				case '10' :
					$show_rate = '<br />Current rating: '
						.$avg.
						' of maximum 10 from '
						.$count.
						' voters ';
					$rate_html = $this->get_rate_text().
						$this->multi_rate_html($id, 10);
					break;
				case '10-2' :
					$rate_html = $this->get_rate_text().
						$this->multi_rate_html($id, 10).
						$this->separator.
						$this->rate_html($id, 'report');
					$show_rate = '<br />Current rating: '
						.$avg.
						' of maximum 10 from '
						.$count.
						' voters ';
					break;
				default : 
					error('switch error, option not available', __FILE__, __LINE__);
					break;
			}

			if($db->num_rows($ip_sql) != 0)
				$rate_html = 'feedback sent';
			
			return '<br />' .($count==0 ? '' : $show_rate). '<br />' .$rate_html. '<br />' .$error->get_warning($id. 'vote_error');
			//error below displays the same text for all rows
			//
		}
	}
}