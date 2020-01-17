
<?php require('Views/template/footer.phtml');
require_once ('Models/User.php');
require_once('Models/dataSet.php');
$view = new stdClass();
$view->pageTitle = 'Search';
$dataSet = new dataSet();
$user = new User();


// Passing the search query to the model to search for it in the DB
if (isset($_POST['search'])) {
    $search_for = $_POST['text'];
    $search_in = $_POST['searchIn'];
    $view->dataSet = $dataSet->search($search_for, $search_in);
    $view->searchIn = $search_in;

}
if ($search_in==1) {
require_once('Views/Searchresults.phtml');
}
if ($search_in==2) {
    require_once('Views/Searchresults2.phtml');
}
if ($search_in==3) {
    require_once('Views/Searchresults3.phtml');
}
if ($search_in==4) {
    require_once('Views/Searchresults4.phtml');
}
