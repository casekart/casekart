
// $(document).ready(function() {
//   $('#dt_table').dataTable( {
//     "language": {
//       "decimal": ".",
//       "thousands": ","
//     }
//   } );
// } );
$('#button').click(function () {
  $("input[type='file']").trigger('click');
});

$("input[type='file']").change(function () {
  $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''));
  // alert($(":file").val());
});
// $("#image").on('click', function () {
//     $("#ulList").empty();
//     var fp = $("#image");
//     var lg = fp[0].files.length; // get length
//     var items = fp[0].files;
//     var fragment = "";
    
//     if (lg > 0) {
//         for (var i = 0; i < lg; i++) {
//             var fileName = items[i].name; // get file name
//             var fileSize = items[i].size; // get file size 
//             var fileType = items[i].type; // get file type
 
//             // append li to UL tag to display File info
//             fragment += "<li>" + fileName + " (<b>" + fileSize + "</b> bytes) - Type :" + fileType + "</li>";
//         }
 
//         $("#ulList").append(fragment);
//     }
// });

// var substringMatcher = function(strs) {
//     return function findMatches(q, cb) {
//       var matches, substrRegex;

// // an array that will be populated with substring matches
// matches = [];

// // regex used to determine if a string contains the substring `q`
// substrRegex = new RegExp(q, 'i');

// // iterate through the pool of strings and for any string that
// // contains the substring `q`, add it to the `matches` array
// $.each(strs, function(i, str) {
//   if (substrRegex.test(str)) {
// // the typeahead jQuery plugin expects suggestions to a
// // JavaScript object, refer to typeahead docs for more info
// matches.push({ value: str });
// }
// });

// cb(matches);
// };
// }; 