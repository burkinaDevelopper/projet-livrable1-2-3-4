$(document).ready(function(){

    var url=link+"articles-json";



    function dispayArticle() {
        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                data.filter((article)=>article.title.includes(query)).map(article=>{
                    var articles=`
                        <article data-title="${article['title']}" data-image="${article['path']}" data-description="${article['description']}" data-content="${article['content']}" data-tag="${article['tag']}">
                                <a href="${link}article_detail/${article['id']}">
                                    <h3>${article['title']}
                                        <span class="date">${article['date']}</span>
                                    </h3>
                                    <figure>
                                        <img width="560" height="307" src="${link}/public/asset/media/${article['path']}" alt="tumbnail" loading="lazy" sizes="(max-width: 560px) 100vw, 560px">
                                    </figure>
                                </a>
                                <span><a data-id="${article['articleID']}" class="like" href="${link}like/${article['id']}"> liker <i class="fa-regular fa-heart"></i></a></span>
                        </article>
                        `
                $(".data-container").prepend(articles);
                })
            }
        });
        
    }
    dispayArticle();
    var query="";
    var inputSearch=$("#inputSearch");
    $("#articleSearch").on('submit',function(e){
        e.preventDefault();
          query =inputSearch.val();
       dispayArticle();
        
    });

   

    // .filter((country) => country.continents[0].includes(selectedRadio)

    

    $(document).on("mouseover", "#dataContainer h3", function() {
        var parent=$(this).parent();
        var grandParent=parent.parent();
        var title = grandParent.data("title");
        var image = grandParent.data("image");
        var content = grandParent.data("content");
        var tag = grandParent.data("tag");
        var description = grandParent.data("description");
        var linkimg=link+'/public/asset/media/'+image;
        $(".modalTitle").text(title);
        $(".modalImg").attr("src",linkimg);
        $(".modalDescription").prepend(description);
        $(".modalContent").prepend(content);
        $(".modalTag").prepend(tag);

        $("#myModal").show();
    });
    $(".close").click(function() {
        $("#myModal").hide();
    });
    $(window).click(function(event) {
        if (event.target.id === "myModal") {
            $("#myModal").hide();
        }
    });
    $(document).on("click", ".like", function(e) {
        e.preventDefault();
        var me=$(this);
        var id=$(this).data("id");
        var url=link+"like/"+id
        $.get(url, function() {
           $(me).hide();
        });
    });

    function ArticlesData() {
        var url=link+"favories-json";
        $.getJSON(url, function(data) {
            $("#favories-display").empty(); 
            if (data.length!=0) {
                $.each(data,function (index,article) {
                    var contentData=`
                            <article>
                                <a href="${link}article_detail/${article['id']}">
                                    <h3>${article['title']}
                                        <span class="date">${article['date']}</span>
                                    </h3>
                                    <figure>
                                        <img width="560" height="307" src="${link}public/asset/media/${article['path']}" alt="tumbnail" loading="lazy" sizes="(max-width: 560px) 100vw, 560px">
                                    </figure>
                                </a>
                                <span><a class="dislike" data-id="${article['id']}" href="${link}dislike/${article['id']}"> supprimer <i class="fa-solid fa-trash"></i></a></span>
                            </article>
                    `
                   
                    $("#favories-display").prepend(contentData);
                    
                })
            }else{
                var contentData=`<article>
                            <h3>Pas de favoris</h3>
                              </article>`;
                $("#favories-display").prepend(contentData);
            }
          
        });
    }
    ArticlesData();
    $(document).on("click", ".dislike", function(e) {
        e.preventDefault();
        var id=$(this).data("id");
        var url=link+"dislike/"+id
        $.get(url, function() {
            ArticlesData();
        });
    });
})

