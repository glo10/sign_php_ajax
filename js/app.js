(function(){
    $(document).ready(function(){
        //tags
        $('.btnSign').on('click',function(){
            var boxshow = $(this).attr('data-content');
            var boxHide = $(this).attr('data-hide');
            $(this).attr('class','btn btn-success btnSign');
            $(this).siblings().attr('class','btn btn-default btnSign');
            $(boxshow).show();
            $(boxHide).hide();
        });

        //request from client to php server in order to sign in or sign up
        $('form').on('submit',function(e){
            e.preventDefault();
            var action = $(this).data('url');
            $.ajax({
                type:'post',
                url:action,
                data:$(this).serialize(),
                success:function(data){
                    console.log(data);
                    if(data == 'connexion'){
                        window.location.replace('accueil.php');
                    }
                    if(data == 'inscription'){
                        $('#userMsg').text('Votre compte a été crée, veuillez vous connecter.');
                        $('.btnSign:first-of-type').trigger('click');
                    }
                    else{
                        $('#userMsg').text(data);
                    } 
                },
                error : function(){
                    $('#userMsg').text('Erreur au niveau de l\'execution de la connexion côté serveur');
                }
            });
        })

    });
})();