<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="">
                    <img src="images/camara-reflex-digital.png" alt="Camara">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE MUA</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, aperiam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus aspernatur vitae at, omnis ut architecto ad unde illo modi sequi.</p>
            <p>Lorem ipsum dolor sit amet.</p>  
        </div>
        <div class="box">
            <h2>SIGUEME</h2>
            <div class="red-social">
                <a href="#" class="fa-brands fa-facebook-square"></a>
                <a href="#" class="fa-brands fa-instagram"></a>
                <a href="#" class="fa-brands fa-twitter-square"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>
            &copy; 2022 <b>Yotumhaim</b> - Todos los Derechos Reservados.
        </small>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script>
    var sb = document.getElementeById("snackbar");
    function showMessage(msg){
        sb.innerHTML = msg;
        sb.classList.add('show');

        setTimeout(function(){sb.classList.remove('show')},300);
    }
</script>
</body>
</html>