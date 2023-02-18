   <div>
       <footer class="footer py-3 border-top">
           <div class="container">
               <div class="copyright text-center text-white my-auto">
                   <span>Copyright &copy; HIMASI UBSI <?= date('Y'); ?></span>
               </div>
           </div>
       </footer>
   </div>

   <script>
       document.addEventListener("click", function(e) {
           if (e.target.classList.contains("photo")) {
               const src = e.target.getAttribute("src");
               document.querySelector(".modal-img").src = src;
               const myModal = new bootstrap.Modal(document.getElementById('photo-popup'));
               myModal.show();
           }
       })
   </script>
   <script src=".assets/js/main.js"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
       AOS.init();
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>

   </html>