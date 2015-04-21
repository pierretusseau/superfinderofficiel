<?php



class CVine {

  // Je déclare la variable config
  public $config = "";


  public function __construct(){
    // Je crée un OBJET "config" VIDE !!! (cela sert a éviter une erreur PHP)
    $this->config = new stdClass();
    // L'url de mon API c'est CA
    $this->config->urlCVine = 'http://www.comicvine.com/api/';
    // La clée de mon API c'est CA
    $this->config->apiKey   = '78b8df15393111761e1a94888369a99762a13b0a';
    // Format JSON
    $this->config->json     = '&format=json';
  }
  

  //====================================================================
  //                            SEARCH                                //
  //====================================================================
  public function search($query)
  {
    // Remplace les espaces par des +
    $query = str_replace(" ", "+", $query);
    // Construction de l'URL en réutilisant les variables de l'objet config
    $url = $this->config->urlCVine.'search/?api_key='.$this->config->apiKey.$this->config->json;
    $url .= '&query='.$query;
    // La recherche renvoie toujours des VOLUMES
    $url .= '&resources=volume';
    // Les champs que je peux afficher pour la recherche
    $url .= '&field_list=start_year,id,image,name,count_of_issues,publisher';
    // Limite de la recherche
    $url .= '&limit=10';
    
    // echo '<pre>';
    // var_dump($url);
    // echo '</pre>';
    
    // Décoder le résultat
    $results = json_decode(file_get_contents($url));
    return $results->results;
  }


  //====================================================================
  //                            GETTERS                               //
  //====================================================================

  /////////////////////////////////////////////////
  // Récupérer les issues d'un volume cliqué (depuis la recherche)
  public function getIssues($volume)
  {
    $url = $this->config->urlCVine.'issues/?api_key='.$this->config->apiKey.$this->config->json;
    // La recherche renvoie les issues d'un volume
    $url .= '&filter=volume:'.$volume;
    // Les champs que je peux afficher pour la recherche
    $url .= '&field_list=image,cover_date,id,issue_number,name,volume';
    // Limite de la recherche
    $url .= '&limit=10';

    //var_dump($url);

    $results = json_decode(file_get_contents($url));
    return $results->results;
  }

  /////////////////////////////////////////////////
  // Je récupère les détails d'UN SEUL ISSUE par son ID ($issueId)
  public function getIssue($issueId)
  {
    $url = $this->config->urlCVine.'issues/?api_key='.$this->config->apiKey.$this->config->json;
    // La recherche renvoie les issues d'un volume
    $url .= '&filter=id:'.$issueId;
    // Les champs que je peux afficher pour la recherche
    $url .= '&field_list=image,cover_date,id,issue_number,name,volume';

    //var_dump($url);

    $results = json_decode(file_get_contents($url));
    return $results->results;
  }
}

















