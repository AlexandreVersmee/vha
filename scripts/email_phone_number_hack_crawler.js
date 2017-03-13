var username = "lesptitssoins";
var hostname = "gmail.com";

var emailString =  username + "@" + hostname;
var emailMailTo = "mailto:" + emailString;

var linktext = "<a href='" + emailMailTo + "'>" + emailString + "</a>" ;

var phoneNumber = "03 27 46 42 04";


$("#phoneNumber").html(phoneNumber);
$("#emailHeader").html(linktext);
$("#emailFooter").attr("href", emailMailTo);