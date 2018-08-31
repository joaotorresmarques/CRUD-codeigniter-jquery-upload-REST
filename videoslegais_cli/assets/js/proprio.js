$(document).ready(function(){
    //MODAL VISUALIZAR VIDEO
    $('#visualizarVideo').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var vid_video = button.data('videos') // Extract info from data-* attributes
        var vid_titulo = button.data('titulo') 
        var vid_descricao = button.data('descricao') 

        var vid_html = '<video width="100%" height="600px" controls="controls" >'
        +'<source src="http://localhost/ci/videoslegais/upload/'+vid_video+'" type="video/mp4"></source>'
        +'</video>';
        $("#vid_video").html(vid_html)
        $("#vid_titulo").html(vid_titulo)
        $("#vid_descricao").html(vid_descricao)
     
        

    })
    
   
});
