<link rel="stylesheet" href="{{ asset('/css/starRating/starRating.css') }}">
<div class="custom-container">
    <div class="post">
        <div class="text">Thanks for rating us!</div>
        <div class="edit">EDIT</div>
    </div>
    <div class="star-widget">
        <input type="radio" name="rate" id="rate-5" value="5">
        <label for="rate-5" class="fa fa-star" onclick="starRatingFive()"></label>

        <input type="radio" name="rate" id="rate-4" value="4">
        <label for="rate-4" class="fa fa-star" onclick="starRatingFour()"></label>

        <input type="radio" name="rate" id="rate-3" value="3">
        <label for="rate-3" class="fa fa-star" onclick="starRatingThree()"></label>

        <input type="radio" name="rate" id="rate-2" value="2">
        <label for="rate-2" class="fa fa-star" onclick="starRatingThree()"></label>

        <input type="radio" name="rate" id="rate-1" value="1">
        <label for="rate-1" class="fa fa-star" onclick="starRatingOne()"></label>

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
