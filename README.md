# klallam-lookup
Project to give public access to klallam words

Klallam Lookup is a web app that allows people to search and view words in Klallam, by queries based on English, or Klallam IPA, or by category.

There are five main parts to Klallam Lookup:
* klallam-lookup.html - lives in gluefish.com/klallam. Includes:
  * Input text box and submit button
  * iFrame for results to appear
* klallam.php - lives in gluefish.com/klallam.  Takes the request from the html and feeds it to the spreadsheet request process.
* klinst.html - instruction sheet on gluefish.com/klallam.  Shows by default when klallam-lookup is loaded, or on reload.
* ɬəmtiyáčaʔ - an independent google spreadsheet consisting of several tabs, including the one of interest to this program, "Words".
  All input and editing of this sheet is done from the ɬəmtiyáčaʔ page, and is not in the process of this app.
  
Access to klallam-lookup.html is facilitated by the bitly shortcut bit.ly/klallam.
