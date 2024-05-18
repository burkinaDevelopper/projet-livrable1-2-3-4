$(document).ready(function() {
    
    var url=http+"://"+host+folder;
    var urlGet=url+"/favorit-json";
    var urlPost=url+"/delete_favorite";

    //Affichier la fenetre modal
    function showModal(title_art,category_art,image_art,content_art) {
        var src=paths+"/asset/images/"+image_art;
        $('#title').text(title_art);
        $('#category').text(category_art);
        $('#img').attr("src",src);;
        $('#content').text(content_art);
        $('#info-modal').modal({
            fadeDuration: 100
        });
    }
    //click sur le lien du titre pour afficher la fentre modal
    $('.modal-title').click(function(e) {
        e.preventDefault();
        var title_art = $(this).data('title');
        var category_art = $(this).data('category');
        var image_art = $(this).data('image');
        var content_art = $(this).data('content');
        showModal(title_art,category_art,image_art,content_art);
        // if (title_art) {
        // }
    });
    $('#custom-close-button').click(function() {
        $.modal.close();
    });
    
    function loadData() {
        $.getJSON(urlGet, function(data) {
            $("#itemList").empty(); // Vide la liste avant d'ajouter les nouveaux éléments
            if (data.length !=0) {
                $.each(data, function(index, row) {
                    var display=`
                            <div class='article'>;
                                <h3><a href='${URL}/articles/${row['id_art']}'>${row['title_art']}</a></h3>
                                <figure>
                                   <img src='${PUBLIQUE}/asset/images/${row['image_art']}' alt='' class='article-image'>
                                </figure>
                                <p>Date: ${row['date_art']}</p>
                                <button data-id='${row['id_art']}' class='favorite-button deleteBtn' type='submit'>Supprimer</button>
                            </div>;
                    `
                    $("#itemList").append(display);
                });
                
            } else {
                var display=`<p class='error-message' align='center'>Votre panier est vide.</p>`;
                $("#itemList").append(display);
            }  
        });
    }

    // Appel de la fonction pour charger les données au chargement de la page
    loadData();

//click pour supprimer une favorie et rejouer la fonction loadData sans recharger la page
    $(document).on("click", ".deleteBtn", function() {
        var itemId = $(this).closest("button").data("id");
        
        $.post(urlPost, { article_id: itemId }, function() {
            loadData(); // Recharge les données après la suppression
        });
    });

});