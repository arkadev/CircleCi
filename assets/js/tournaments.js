function cambiar(id_val){ 
    var image1 = "../assets/img/LikeGreen.png";
    var image2 = "../assets/img/Dislike.png";
    var a=  parseInt(id_val.charAt(4));
    console.log(a%2!=0);
    if(a%2==0){        
        if(document.images["like".concat(a+1)]!=null){
            if(a%2==0){                    
                document.images[id_val].src=image1;
                document.images["like".concat(a+1)].src=image2;
            }else{
                document.images[id_val].src=image1;
                document.images["like".concat(a-1)].src=image2;    
            }
        }
    }else{
        if(a%2==0){                    
            document.images[id_val].src=image1;
            document.images["like".concat(a+1)].src=image2;
        }else{
            document.images[id_val].src=image1;
            document.images["like".concat(a-1)].src=image2;    
        }

    }
};            

function coloBtn(id){
    document.getElementById("baner-color").style.backgroundColor = document.getElementById(id).style.backgroundColor;			
};

function getValues(){      

    var description = document.getElementById("description").value;
    //      var image_url = hexc(document.getElementById('image-baner').src);

    console.log(description);
};

function insertTournament() {
    var color = document.getElementById('baner-color').style.backgroundColor;
    var name = document.getElementById("name").value;
    data = {
        name: $('#name').val(),
        description: $('#description').val(),
        image_url: document.getElementById("image-baner").src,
        color: hexc(color)              
    };
    $.ajax({
        url: 'manager/insertTournament',
        data: data,
        type: 'post',
        success: function () {
            location.reload();
        }
    });

};

function hexc(colorval) {
    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    delete(parts[0]);
    for (var i = 1; i <= 3; ++i) {
        parts[i] = parseInt(parts[i]).toString(16);
        if (parts[i].length == 1) parts[i] = '0' + parts[i];
    }
    color = '#' + parts.join('');
    return color;
};