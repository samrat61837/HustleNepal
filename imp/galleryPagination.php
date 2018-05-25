<?php
 
class Paginator {
 
    private $conn;
    private $limit;
    private $page;
    private $query;
    private $total;

    public function __construct($conn, $query) {
     
        $this->conn = $conn;
        $this->query = $query;
    
        $rs= $this->conn->prepare( $this->query );
        $rs->execute();
        $this->total = $rs->rowCount();
        
    }

    public function getData( $limit , $page ) {
     
        $this->limit = $limit;
        $this->page = $page;
        
    
        if ( $this->limit == 'all' ) {
            $query = $this->query;
        } else {
            $query = $this->query . " LIMIT " . ( ( $this->page - 1 ) * $this->limit ) . ", $this->limit";
        }
        $rs = $this->conn->prepare( $query );
        $rs->execute();
        while ( $row = $rs->fetch(PDO::FETCH_ASSOC) ) {
            $results[]  = $row;
        }
    
        $result         = new stdClass();
        $result->page   = $this->page;
        $result->limit  = $this->limit;
        $result->total  = $this->total;
        $result->data   = $results;
        return $results;

    }

    public function createLinks( $links ) {
        if ( $this->limit == 'all' ) {
            return '';
        }
    
        $last       = ceil( $this->total / $this->limit );
    
        $start      = ( ( $this->page - $links ) > 0 ) ? $this->page - $links : 1;
        $end        = ( ( $this->page + $links ) < $last ) ? $this->page + $links : $last;
    
        $html       = '<ul class="pagination">';
    
        $class      = ( $this->page == 1 ) ? "disabled" : "";
        $html       .= '<li class="' . $class . ' symbol"><a href="?limit=' . $this->limit . '&page=1">&laquo;</a></li>';

        if($this->page!=1){

            $html       .= '<li class="' . $class . ' symbol"><a href="?limit=' . $this->limit . '&page=' . ( $this->page - 1 ) . '">&lsaquo;</a></li>';
        }
        else{

             $html       .= '<li class="' . $class . ' symbol"><a href="?limit=' . $this->limit . '&page=' . ( $this->page ) . '">&lsaquo;</a></li>';
        }

        if ( $start > 1 ) {
            $html   .= '<li><a href="?limit=' . $this->limit . '&page=1">1</a></li>';
            $html   .= '<li><span class="titik">...</span></li>';
        }
    
        for ( $i = $start ; $i <= $end; $i++ ) {
            $class  = ( $this->page == $i ) ? "active" : "";
            $html   .= '<li class="' . $class . '"><a href="?limit=' . $this->limit . '&page=' . $i . '">' . $i . '</a></li>';
        }
    
        if ( $end < $last ) {
            $html   .= '<li class="disabled"><span>...</span></li>';
            $html   .= '<li><a href="?limit=' . $this->limit . '&page=' . $last . '">' . $last . '</a></li>';
        }
    
        $class      = ( $this->page == $last ) ? "disabled" : "";

        if($this->page !=$last){

             $html       .= '<li class="' . $class . ' symbol"><a href="?limit=' . $this->limit . '&page=' . ( $this->page + 1 ) . '">&rsaquo;</a></li>';
        }
        else{

            $html       .= '<li class="' . $class . ' symbol"><a href="?limit=' . $this->limit . '&page=' . ( $this->page ) . '">&raquo;</a></li>';

        }
    
        $html       .= '</ul>';
    
        return $html;
    }
 
}