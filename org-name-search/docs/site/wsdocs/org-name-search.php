<?php

/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */
 

  namespace Com\Redhat\Examples\Models {

    /**
     * 
     */
    class Organizations  {
    
    
      /**
       * (no documentation provided)
       */
      private $organizationList;

      /**
       * Constructs a Organizations from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * (no documentation provided)
       */
      public function getOrganizationList() {
        return $this->organizationList;
      }
      
      /**
       * (no documentation provided)
       */
      public function setOrganizationList($organizationList) {
        $this->organizationList = $organizationList;
      }
      /**
       * Returns the associative array for this Organizations
       */
      public function toArray() {
        $a = array();
        if( $this->organizationList ) {
          $ab = array();
          foreach( $this->organizationList as $i => $x ) {
            $ab[$i] = $x->toArray();
          }
          $a['organizations'] = $ab;
        }
        return $a;
      }
      
      /**
       * Returns the JSON string for this Organizations
       */
      public function toJson() {
        return json_encode($this->toArray());
      }

      /**
       * Initializes this Organizations from an associative array
       */
      public function initFromArray($o) {
        $this->organizationList = array();
        if( isset($o['organizations']) ) {
          foreach( $o['organizations'] as $i => $x ) {
            $this->organizationList[$i] = new \Com\Redhat\Examples\Models\Organization($x);
          }
        }
      }
    
    }
    
  }


  namespace Com\Redhat\Examples\Models {

    /**
     * 
     */
    class PageResponse  {
    
    
      /**
       * (no documentation provided)
       */
      private $content;
      /**
       * (no documentation provided)
       */
      private $totalElements;
      /**
       * (no documentation provided)
       */
      private $totalPages;

      /**
       * Constructs a PageResponse from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * (no documentation provided)
       */
      public function getContent() {
        return $this->content;
      }
      
      /**
       * (no documentation provided)
       */
      public function setContent($content) {
        $this->content = $content;
      }
      /**
       * (no documentation provided)
       */
      public function getTotalElements() {
        return $this->totalElements;
      }
      
      /**
       * (no documentation provided)
       */
      public function setTotalElements($totalElements) {
        $this->totalElements = $totalElements;
      }
      /**
       * (no documentation provided)
       */
      public function getTotalPages() {
        return $this->totalPages;
      }
      
      /**
       * (no documentation provided)
       */
      public function setTotalPages($totalPages) {
        $this->totalPages = $totalPages;
      }
      /**
       * Returns the associative array for this PageResponse
       */
      public function toArray() {
        $a = array();
        if( $this->content ) {
          $a["content"] = (array) $this->content;
        }
        if( $this->totalElements ) {
          $a["totalElements"] = $this->totalElements;
        }
        if( $this->totalPages ) {
          $a["totalPages"] = $this->totalPages;
        }
        return $a;
      }
      
      /**
       * Returns the JSON string for this PageResponse
       */
      public function toJson() {
        return json_encode($this->toArray());
      }

      /**
       * Initializes this PageResponse from an associative array
       */
      public function initFromArray($o) {
        if( isset($o['content']) ) {
          $this->content = (object) $o["content"];
        }
        if( isset($o['totalElements']) ) {
          $this->totalElements = $o["totalElements"];
        }
        if( isset($o['totalPages']) ) {
          $this->totalPages = $o["totalPages"];
        }
      }
    
    }
    
  }


  namespace Com\Redhat\Examples\Models {

    /**
     * 
     */
    class Organization  {
    
    
      /**
       * (no documentation provided)
       */
      private $id;
      /**
       * (no documentation provided)
       */
      private $orgId;
      /**
       * (no documentation provided)
       */
      private $orgName;

      /**
       * Constructs a Organization from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * (no documentation provided)
       */
      public function getId() {
        return $this->id;
      }
      
      /**
       * (no documentation provided)
       */
      public function setId($id) {
        $this->id = $id;
      }
      /**
       * (no documentation provided)
       */
      public function getOrgId() {
        return $this->orgId;
      }
      
      /**
       * (no documentation provided)
       */
      public function setOrgId($orgId) {
        $this->orgId = $orgId;
      }
      /**
       * (no documentation provided)
       */
      public function getOrgName() {
        return $this->orgName;
      }
      
      /**
       * (no documentation provided)
       */
      public function setOrgName($orgName) {
        $this->orgName = $orgName;
      }
      /**
       * Returns the associative array for this Organization
       */
      public function toArray() {
        $a = array();
        if( $this->id ) {
          $a["id"] = $this->id;
        }
        if( $this->orgId ) {
          $a["orgId"] = $this->orgId;
        }
        if( $this->orgName ) {
          $a["orgName"] = $this->orgName;
        }
        return $a;
      }
      
      /**
       * Returns the JSON string for this Organization
       */
      public function toJson() {
        return json_encode($this->toArray());
      }

      /**
       * Initializes this Organization from an associative array
       */
      public function initFromArray($o) {
        if( isset($o['id']) ) {
          $this->id = $o["id"];
        }
        if( isset($o['orgId']) ) {
          $this->orgId = $o["orgId"];
        }
        if( isset($o['orgName']) ) {
          $this->orgName = $o["orgName"];
        }
      }
    
    }
    
  }


  namespace Com\Redhat\Examples\Models {

    /**
     * 
     */
    class OrganizationPages extends \Com\Redhat\Examples\Models\PageResponse  {
    
    

      /**
       * Constructs a OrganizationPages from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * Returns the associative array for this OrganizationPages
       */
      public function toArray() {
        $a = parent::toArray();
        return $a;
      }
      

      /**
       * Initializes this OrganizationPages from an associative array
       */
      public function initFromArray($o) {
        parent::initFromArray($o);
      }
    
    }
    
  }

  
?>