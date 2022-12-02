<?php 
function news_get_by_id ( $news_id )
{

    $this->db->select('*');
    $this->db->select("DATE_FORMAT( date, '%d.%m.%Y' ) as date_human",  FALSE );
    $this->db->select("DATE_FORMAT( date, '%H:%i') as time_human",      FALSE );


    $this->db->from('news');

    $this->db->where('news_id', $news_id );


    $query = $this->db->get();

    if ( $query->num_rows() > 0 )
    {
        $row = $query->row_array();
        return $row;
    }

}   
