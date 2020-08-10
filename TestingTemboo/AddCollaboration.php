// Instantiate the Choreo, using a previously instantiated Temboo_Session object, eg:
// $session = new Temboo_Session('accountName', 'myFirstApp', 'abc123xxxxxxxxxxxxxx');

$addCollaboration = new Box_Collaborations_AddCollaboration($session);

// Get an input object for the Choreo
$addCollaborationInputs = $addCollaboration->newInputs();

// Execute Choreo and get results
$addCollaborationResults = $addCollaboration->execute($addCollaborationInputs)->getResults();