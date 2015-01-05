<?php
$known = "Fred";
$query = "Phred";
	if (soundex($known)== soundex($query)) {
		print "soundex: {$known} sounds like {$query}\n";
	}
	else {
		print"soundex: {$known} doesn't sound like {$query} \n";

	}

	if (metaphone($known)== metaphone($query)) {
		print "metaphone: {$known} sounds like {$query}\n";
	}
	else {
		print"metaphone: {$known} doesn't sound like {$query} \n";
		
	}
?>