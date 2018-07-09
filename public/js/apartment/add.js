
console.log('files js is On')
$('#triggerFile').on('click',function () {
    console.log('clicked ')
    $('input[type=file]').click()
})




var filesInput =  $('input[type=file]');

filesInput.on("change", function(event){
    console.log('on change ...')
    var files = event.target.files; //FileList object
    var output =  $('#result');

    for(var i = 0; i< files.length; i++)
    {
        console.log(i)
        var file = files[i];

        //Only pics
        if(!file.type.match('image'))
            continue;

        var picReader = new FileReader();

        picReader.addEventListener("load",function(event){
            console.log('on load ...')

            var picFile = event.target;
            console.log(picFile)
            $('#result').append("<div class='col-md-3 preview-item'  ><img  class='' src='" + picFile.result + "'" +
                "title='" + picFile.name + "'/></div>");


        });

        //Read the image
        picReader.readAsDataURL(file);
    }
    console.log(files)
});

$('#other').hide()

$('#is_owner').on('change', function () {
    console.log('is owner changed !')
    if ($('#is_owner').val() === "other"){
        $('#other').show()

    } else{
        $('#other').hide()

    }
})
$('#intention').on('change', function () {
    console.log('Intention changed !')
    if ($('#intention').val() === "Looking for property"){
        $('#conditional_div').hide()
        $('#imgs').hide()
    } else{
        $('#conditional_div').show()
        $('#imgs').show()
    }
})
$('#property_type_condition').hide()
$('#property_type').on('change', function () {
    console.log('property type changed !')
    if ($('#property_type').val() === "Apartment" || $('#property_type').val() === "Houses and villas" ){
        $('#property_type_condition').show()
    } else{
        $('#property_type_condition').hide()
    }
})


$(document).ready(function () {
    console.log('awwww')
    if ($("#descriptiontextarea").length > 0) {
        tinymce.init({
            selector: "textarea#descriptiontextarea",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

        });
    }
})