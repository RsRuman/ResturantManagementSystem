<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    .custom-container{
        position: relative;
        width: auto;
        background: #111;
        padding: 20px 20px;
        border: 1px solid #444;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .custom-container .post{
        display: none;
    }
    .custom-container .text{
        font-size: 25px;
        color: #666;
        font-weight: 500;
    }
    .custom-container .edit{
        position: absolute;
        right: 10px;
        top: 5px;
        font-size: 16px;
        color: #666;
        font-weight: 500;
        cursor: pointer;
    }
    .custom-container .edit:hover{
        text-decoration: underline;
    }
    .custom-container .star-widget input{
        display: none;
    }
    .star-widget label{
        font-size: 40px;
        color: #444;
        padding: 10px;
        float: right;
        transition: all 0.2s ease;
    }
    input:not(:checked) ~ label:hover,
    input:not(:checked) ~ label:hover ~ label{
        color: #fd4;
    }
    input:checked ~ label{
        color: #fd4;
    }
    input#rate-5:checked ~ label{
        color: #fe7;
        text-shadow: 0 0 20px #952;
    }
    #rate-1:checked ~ form header:before{
        content: "I just hate it ";
    }
    #rate-2:checked ~ form header:before{
        content: "I don't like it ";
    }
    #rate-3:checked ~ form header:before{
        content: "It is awesome ";
    }
    #rate-4:checked ~ form header:before{
        content: "I just like it ";
    }
    #rate-5:checked ~ form header:before{
        content: "I just love it ";
    }
    .custom-container form{
        display: none;
    }
    input:checked ~ form{
        display: block;
    }
    form header{
        width: 100%;
        font-size: 25px;
        color: #fe7;
        font-weight: 500;
        margin: 5px 0 20px 0;
        text-align: center;
        transition: all 0.2s ease;
    }
    form .textarea{
        height: 100px;
        width: 100%;
        overflow: hidden;
    }
    form .textarea textarea{
        height: 100%;
        width: 100%;
        outline: none;
        color: #eee;
        border: 1px solid #333;
        background: #222;
        padding: 10px;
        font-size: 17px;
        resize: none;
    }
    .textarea textarea:focus{
        border-color: #444;
    }


</style>

<div class="custom-container">
    <div class="post">
        <div class="text">Thanks for rating us!</div>
        <div class="edit">EDIT</div>
    </div>
    <div class="star-widget">
        <input type="radio" name="rate" id="rate-5" value="5">
        <label for="rate-5" class="fas fa-star" onclick="starRatingFive()"></label>

        <input type="radio" name="rate" id="rate-4" value="4">
        <label for="rate-4" class="fas fa-star" onclick="starRatingFour()"></label>

        <input type="radio" name="rate" id="rate-3" value="3">
        <label for="rate-3" class="fas fa-star" onclick="starRatingThree()"></label>

        <input type="radio" name="rate" id="rate-2" value="2">
        <label for="rate-2" class="fas fa-star" onclick="starRatingThree()"></label>

        <input type="radio" name="rate" id="rate-1" value="1">
        <label for="rate-1" class="fas fa-star" onclick="starRatingOne()"></label>

        <form action="/user-review" method="post">
            @csrf
            <header></header>
            <div class="textarea">
                <textarea cols="30" placeholder="Describe your experience.." name="review"></textarea>
            </div>
            <input type="hidden" name="starRating" id="starRating">

            <button type="submit" class="btn btn-warning btn-block">Post</button>

        </form>
    </div>
</div>

<script>
    const btn = document.querySelector("button");
    const post = document.querySelector(".post");
    const widget = document.querySelector(".star-widget");
    const editBtn = document.querySelector(".edit");


    btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
            widget.style.display = "block";
            post.style.display = "none";

        }
        return false;
    }
    function starRatingFive(){

        document.getElementById("starRating").value = 5;

    }

    function starRatingFour(){

        document.getElementById("starRating").value = 4;
    }

    function starRatingThree(){

        document.getElementById("starRating").value = 3;

    }

    function starRatingtwo(){

        document.getElementById("starRating").value = 2;
    }

    function starRatingOne(){

        document.getElementById("starRating").value = 1;
    }

</script>
