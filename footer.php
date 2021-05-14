<div class="services">
                                <div class="services-box">
                                    <i class='bx bxs-truck'></i>
                                    <span>Free Shipping</span>
                                    <p>Free Shipping every first order</p>
                                </div>
                                <div class="services-box">
                                    <i class='bx bxs-phone-call'></i>
                                    <span>Support 24/7</span>
                                    <p>We support 24hour a day </p>
                                </div>
                                <div class="services-box">
                                    <i class='bx bx-sync' ></i>
                                    <span>Money back 100%</span>
                                    <p>You have 20 days to Return </p>
                                </div>
                            </div>





                        <footer>
                        <span class="copyright">
                            Copyright 2021
                        </span>
                        
                        <div class="subscribe">
                            <form>
                                <input type="email" placeholder="Example@gmail.com" required/>
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                        </footer>
















    
    <script type="text/javascript">
    $(document).on('click','.search',function(){
        $('.search-bar').addClass('search-bar-active')
    });

    $(document).on('click','.search-cancel',function(){
        $('.search-bar').removeClass('search-bar-active')
    });

    $(document).on('click','.user,.already-acc',function(){
        $('.form').addClass('login-active').removeClass('signup-active')
    });

    $(document).on('click','.sign-up',function(){
        $('.form').addClass('signup-active').removeClass('login-active')
    });

    $(document).on('click','.form-cancel',function(){
        $('.form').removeClass('login-active').removeClass('signup-active')
    });
    

    $(document).ready(function(){
        $('#adaptive').lightSlider({
            adaptiveHeight:true,
            auto:true,
            item:1,
            slideMargin:0,
            loop:true

        });
    });


    $(document).ready(function(){
        $('#autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad:function(){
                $('#.autoWidth').removeClass('cS-hidden');
            }
        });
    });

    $(window).scroll(function(){
        if($(document).scrollTop() > 50 ){
            $('.navigation').addClass('fix-nav');
        }
        else{
            $('.navigation').removeClass('fix-nav');
        }
    });

    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('active')
            $('.navigation').toggleClass('active')
        })
    })

    </script>
</body>
</html>