<html>
<footer class="footer">
    <div class="inner-container">
        <h2 class="footer_title">ارتباط با ما</h2>
        <p class="footer__tag_line">ما را در شبكه هاي اجتماعي دنبال كنيد</p>
    </div>
    <ul class="social-list">
        <li class="social-item">
            <a class="social-link" href="">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
        <li class="social-item">
            <a class="social-link" href="">
                <i class="fab fa-telegram"></i>
            </a>
        </li>
        <li class="social-item">
            <a class="social-link" href="">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
    </ul>
</footer>
<script>
    var imgArray1 = [

        '/img/anatomi.jpg',
        '/img/jame.jpg',
        '/img/html5.jpg',];

    var imgArray2 = [

        '/img/khabgah.jpg',
        '/img/haqam-nist.jpg',
        '/img/barnamenevisi-micro-kontroller-pic.jpg'];


    var imgArray3 = [

        '/img/go.jpg',
        '/img/enqelab-qurani.jpg',
        '/img/py.jpg',];

    curIndex = 0;
    imgDuration = 3000;

    function slideShow1() {
        document.getElementById('image1').src = imgArray1[curIndex];
        document.getElementById('image2').src = imgArray2[curIndex];
        document.getElementById('image3').src = imgArray3[curIndex];

        curIndex++;
        if (curIndex == imgArray1.length && curIndex == imgArray2.length
            && curIndex == imgArray3.length) { curIndex = 0; }
        setTimeout("slideShow1()", imgDuration);

    }
    slideShow1();

</script>


</html>
