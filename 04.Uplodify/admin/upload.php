<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test uploadify</title>
        <link type="text/css" rel="stylesheet" href="uploadify/uploadify.css" />
        <style type="text/css">
            .link{padding-top: 5px;}
        </style>
    </head>
    <body>
        <h3>Upload de fichier :</h3>
        <p>Sélectionnez votre fichier puis cliquer sur le bouton télécharger.</p>
        <input id="file_upload" type="file" name="file_upload" />
        <p class="link">
            <a href="javascript:$('#file_upload').uploadifyUpload();">Télécharger le(s) photo(s)</a> |
            <a href="javascript:jQuery('#file_upload').uploadifyClearQueue()">Effacer la liste de téléchargement</a>
        </p>
        <script type="text/javascript" src="uploadify/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="uploadify/swfobject.js"></script>
        <script type="text/javascript" src="uploadify/jquery.uploadify.v2.1.4.min.js"></script>
        <script>
            // <![CDATA[
            $(document).ready(function() {
                $('#file_upload').uploadify({
                    'uploader'  : 'uploadify/uploadify.swf',
                    'script'    : 'uploadify/uploadify.php',
                    'cancelImg' : 'uploadify/cancel.png',
                    'folder'    : 'uploads/',
                    'buttonText':  'Parcourir',
                    'fileExt'   : '*.jpg;*.gif;*.png',
                    'multi'     : true,
                    'auto'      : false
                });
            });
            // ]]>
        </script>
    </body>
</html>
