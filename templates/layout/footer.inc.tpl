<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="../images/home/under.png" class="img-responsive inline" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="contact-info bottom">
                <h2>Contact</h2>
                <address>
                    E-mail: <a href="mailto:mail@jufthirza.nl">mail@jufthirza.nl</a>
                </address>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="contact-form bottom">
                <h2>Stuur een berichtje</h2>
                <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" required="required" placeholder="Naam">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" required="required" placeholder="Emailadres">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Jouw berichtje"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-submit" value="Verstuur">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="copyright-text text-center">
                <p>&copy; Lemcke WebSolutions <?php echo date("Y", time())?>. All Rights Reserved.</p>
                <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
            </div>
        </div>
    </div>
</div>
</footer>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/lightbox.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>