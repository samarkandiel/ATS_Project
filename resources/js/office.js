$(document).ready(function() {
  
$.ajax({
    type: 'GET',
    url: 'http://dev-booking-engine.fare33.com/api/offices/list',
    success: function(data) {
        //return data; 
        console.log(data);
      }

})
})