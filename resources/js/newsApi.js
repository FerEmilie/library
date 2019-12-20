var fullDate = new Date();
var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
var currentDate = fullDate.getFullYear() + "-" + twoDigitMonth + "-" + fullDate.getDate();
var url = 'https://newsapi.org/v2/everything?' +
          'q=livre&' +
          'pageSize=2' +
          'from=' + currentDate +'&' +
          'sortBy=popularity&' +
          'apiKey=e2635dffb5ec4681870242e3bf9fb181';

var req = new Request(url);
console.log(url);
var myList = document.getElementById('news');
fetch(req)
  .then(function(response) {
       if (!response.ok) {
         throw new Error("HTTP error, status = " + response.status);
       }
       return response.json();
     })
     .then(function(json) {
       for(var i = 0; i < 6; i++) {
         var listItem = document.createElement('li');
         listItem.className =  "list-group-item rounded border border-dark";
         listItem.innerHTML = '<strong><a href="' + json.articles[i].url + '">' + json.articles[i].title + '</a></strong><br>';
         listItem.innerHTML += '<em><small>' + json.articles[i].description + '</em><cite title="Source Title"> -' + json.articles[i].source.name + '</cite></small>.';
         listItem.innerHTML +='<img src="'+ json.articles[i].urlToImage +'" alt="Image de l\'article" class="img-thumbnail">';
         myList.appendChild(listItem);
       }
     })
     .catch(function(error) {
       var p = document.createElement('p');
       p.appendChild(
         document.createTextNode('Error: ' + error.message)
       );
       document.body.insertBefore(p, myList);
     });
