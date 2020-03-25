<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<select name="pays" id="pay" class="chpy"  data-dependent="ville">
    @foreach($pay as $p)
        <option value="{{$p->id}}">
          {{$p->nom_pays}}
        </option>
    @endforeach
</select>



<select name="ville"  class="ville">

</select>
<script src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>

<script>
 $(document).ready(function(){
     $('.chpy').change(function(){
        var pays_id=$(this).val();
        var opt='';
        var div=$(this).parent();

        $.ajax({
            type:'get',
            url:'{!!URL::to('ola')!!}',
            data:{'id':pays_id},
            success:function(data){
                console.log(data);
                opt+=' <option value="-1" selected disabled>chose city</option>';
                for(var i=0;i<data.length;i++){
                    opt+='<option value="'+data[i].id+'">'+data[i].nom_ville+'</option>';
                    console.log(i);
                }
                console.log(opt);
                div.find(".ville").html("");
                div.find(".ville").append(opt);

            },
        });

         });












         $('.ville').change(function(){
        var pays_id=$(this).val();
        var opt='';
        var div=$(this).parent();
        console.log($(this).val());

         });

     });


</script>



</body>
</html>
