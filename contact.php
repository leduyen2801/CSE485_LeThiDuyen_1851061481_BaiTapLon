<?php
    include("header.php");
?>
    <section class="contact" id="contact">
            <div class="max-width">
                <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                        <p>Hãy liên hệ với tôi để được phục vụ.</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <div class="info">
                                    <div class="head">Name</div>
                                    <div class="sub-title">Prakash Shahi</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Surkhet, Nepal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">abc@gmail.com</div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="column right">
                <div class="text">Message me</div>
                <form action="#">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" placeholder="Name" required>
                                </div>
                            <div class="field email">
                                    <input type="email" placeholder="Email" required>
                                </div>
                </div>
            <div class="field">
                                <input type="text" placeholder="Subject" required>
                            </div>
            <div class="field textarea">
                                <!-- Due to more textarea, I got an error so I changed the tag name of this textarea into changeit. -->
                                <changeit cols="30" rows="10" placeholder="Message.." required></changeit>
                            </div>
            <div class="button">
                                <button type="submit">Send message</button>
                            </div>
    </form>
    </div>
    </div>
    </div>
    </section>
?>
<?php
    include("footer.php");
?>