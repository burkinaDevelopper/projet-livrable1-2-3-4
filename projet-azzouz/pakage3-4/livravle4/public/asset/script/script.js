$(document).ready(function(){
   
    var form = $('.favoritAdd') ;
   
    form.each(function(){
        $(this).on('submit', function(e){
            e.preventDefault();
            var data = $(this).serialize();
            url2 = $(this).attr('action');
            var element=$(this);
            $.ajax({
            	type: 'POST',
            	url: url2,
            	data: data,
            	dataType: 'json',
            	success: function(response){
                   console.log("ajouter");
            		},    
            });
            $(element).prepend('<div class="alert alert-danger" style="color:red;">Article ajouter</div>');
            setTimeout(function() {
                $(element).hide();
            }, 1000); 
        });
    });

    var formRemove = $('.removeFavorit') ;
    formRemove.each(function(){
        $(this).on('submit', function(e){
            e.preventDefault();
            var data = $(this).serialize();
            url2 = $(this).attr('action');

            $.ajax({
            	type: 'POST',
            	url: url2,
            	data: data,
            	dataType: 'json',
            	success: function(response){
            		// window.location=
                   console.log("ajouter");
            		}
            });
        });
    });


	
});