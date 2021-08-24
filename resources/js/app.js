require('./bootstrap');
require('./custome-file-input');


document.addEventListener("DOMContentLoaded", function(){
    /////// Prevent closing from click inside dropdown
    document.querySelectorAll('.dropdown-menu').forEach(function(element){
    	element.addEventListener('click', function (e) {
    		e.stopPropagation();
    	});
    })
}); 