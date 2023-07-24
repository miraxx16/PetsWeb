<!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>

        window.addEventListener("load", function() {
            const timeout = setTimeout(loading, 500);
            
            var load_screen = document.getElementById("preloader-active");
            function loading(){
                document.body.removeChild(load_screen);
                myFunction();
                
            }
            

            
        });
           
    </script>
    <script type="text/javascript">
        function myFunction() {
           var element = document.getElementById("header_sticky");
           element.classList.add("sticky-top");
        }

    </script>
        <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "350px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>


    <script type="text/javascript">
    let files = [],
        form = document.querySelector('form'),
        container = document.querySelector('img_content'),
        text = document.querySelector('.inner'),
        browse = document.querySelector('.select'),
        input = document.querySelector('.drag input');

    browse.addEventListener('click', () => input.click());
    //input change event
    input.addEventListener('change', () => {
        let file = input.files;
        for (let i = 0; i < file.length; i++) {
            files.push(file[i])

        }
        form.reset();
        showImages();
    })

    const showImages = () => {
        let images = '';
        files.forEach((e, i) => {
            images += `<div class="image" >
                             <img src="${URL.createObjectURL(e)}" alt="image">
                             <span onclick="delImage(${i})">&times;</span>
                        </div>`
        })
        document.getElementById("container").innerHTML = images;
    }
    const delImage = index => {
        files.splice(index, 1)
        showImages()
    }
    </script>

<!-- 
    <script type="text/javascript">
      function login(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("login_load").innerHTML = this.responseText;
        }
        xhttp.open("GET", "login.php");
        xhttp.send();
      }

      setInterval(function(){
        login();
      }, 1);
    </script> -->

