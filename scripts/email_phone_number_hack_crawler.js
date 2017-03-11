var username = "lesptitssoins";
var hostname = "gmail.com";

var emailString =  username + "@" + hostname;
var emailMailTo = "mailto:" + emailString;

var linktext = "<a href='" + emailMailTo + "'>" + emailString + "</a>" ;

var phoneNumber = "07 60 00 17 12";


$("#phoneNumberLPS").html(phoneNumber);
$("#emailHeaderLPS").html(linktext);
$("#emailFooterLPS").attr("href", emailMailTo);