# klallam-lookup

There are five main parts to Klallam Lookup:
* klallam-lookup.html - lives in gluefish.com/klallam. Includes:
  * Input text box and submit button
  * iFrame for results to appear
* klallam.php - lives in gluefish.com/klallam.  Takes the request from the html and feeds it to the spreadsheet request process.
* klinst.html - instruction sheet on gluefish.com/klallam.  Shows by default when klallam-lookup is loaded, or on reload.
* ɬəmtiyáčaʔ - an independent google spreadsheet consisting of several tabs, including the one of interest to this program, "Words".
  All input and editing of this sheet is done from the ɬəmtiyáčaʔ page, and is not in the process of this app.
  
Access to klallam-lookup.html is facilitated by the bitly shortcut bit.ly/klallam.

This project is a php/html front end for a Google Sheets table, consisting of words in several languages:
English, Klallam, Lushootseed, Saanich, and Chinook Jargon. 
The lookup table is being built out of several sources: 
	Klallam Word Of The Day - WOTD, Klallam Dictionary - KD, literature such as Lambert's 	
	'The 7 Brothers of the House of Ste-Tee-Thlum', 
	Tim Montler's "http://klallam.montler.net",
	Klallam Classified Word List</a>, and other sources as I find them.
As of 8/18/20 	there are about 8855 entries.

Clicking in the text box above makes an on-screen keyboard appear. The little box beside it lets you choose between English, Klallam, Lushootseed, and Straits Salish.
To choose Klallam you would choose the pulldown item 'clm - KlallamU', or to enter in English (default), choose English.
Enter the word you wish to search form either in English (such as 'salmon'), or Klallam (such as 'kÊ·Ã­tÅ¡É™n'), or a category (such as 'Fish').
Pasting a word in can be done no matter which language has been chosen.
Click on the 'Submit' button. If your word was found, a listing will appear in this window. If not, the entire list will appear. (Clicking anywhere else works too, 
  just not the enter button...)
