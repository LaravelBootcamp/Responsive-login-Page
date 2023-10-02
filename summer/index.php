<?php 
require_once('../config.php'); 
require_once('./Functions/functions.php'); 
get_header();
?>



    <!-- this is header part -->
    <header class="mb-8 lg:h-screen">
        <section class="flex flex-col-reverse lg:flex-row justify-between text-center items-center bg-[#F9F6E2]">
            <div class="mt-4 lg:m-auto p-6 flex-1">
                <h4 class="text-2xl">---SALE FEVER---</h4>
                <h1 class="text-3xl lg:text-6xl my-7 font-bold">Purchase TK 200 or <br> above & get <span class="text-[#E527B2]"> 20% off</span></h1>
                <div class="flex gap-4 justify-center items-center">
                    <p class="text-lg lg:text-2xl">Use Promo Code</p>
                    <button class="bg-[#E527B2] px-6 py-3 rounded-lg text-white text-lg font-bold lg:text-2xl">SELL200</button>
                </div>
            </div>
            <div class="flex-1">
                <img class="" src="./images/Summer 1.png" alt="">
            </div>
        </section>
    </header>
    <!-- this is main part -->
    <main class="m-auto lg:mx-14 mt-16">
        <section class="w-full h-auto flex flex-col lg:flex-row">
                <div class="w-auto lg:w-3/4">
                    <!--coloumn first row -->
                    <div class="">
                        <h1 class="text-center lg:text-left lg:ml-16 text-5xl">Kitchenware </h1>
                        <!-- first row  -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 justify-center my-10 mx-auto lg:mx-16">
                           <!-- <h2 class="card-title">K. Accessories</h2>  -->
                            <div onclick="clickContainer(this)"  id="card_all" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod1.png" alt="Shoes" class="rounded-xl shadow-xl mb-5 p-6" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">K. Accessories</h2>                     
                                  <p><span id="productAmount">39.00</span>TK</p>
                                </div>
                              </div> 
                              <div onclick="clickContainer(this)"  id="card_all" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod2.png" alt="Shoes" class="rounded-xl px-2 py-4 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">K. Accessories</h2>                     
                                  <p onclick="getAmount(this)"><span id="productAmount">25.00</span>TK</p>
                                </div>
                              </div> 
                              <div  onclick="clickContainer(this)" id="card_all" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod3.png" alt="Shoes" class="rounded-xl py-5 px-2 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Home Cooker</h2>                     
                                  <p><span id="productAmount">49.00</span>TK</p>
                                </div>
                              </div>                                                             
                        </div>
                        <!-- second row -->
                        <h1 class="text-center lg:text-left lg:ml-16 text-5xl">Sportswear </h1>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 justify-center my-10 mx-auto lg:mx-16">
                            <div onclick="clickContainer(this)"  class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod4.png" alt="Shoes" class="rounded-xl px-11 py-9 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Sports Back Cap</h2>                     
                                  <p><span id="productAmount">49.00</span>TK</p>
                                </div>
                              </div> 
                              <div  onclick="clickContainer(this)" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod5.png" alt="Shoes" class="rounded-xl px-11 py-4 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Full Jersey Set</h2>                     
                                  <p><span id="productAmount">69.00</span>TK</p>
                                </div>
                              </div> 
                              <div  onclick="clickContainer(this)" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod6.png" alt="Shoes" class="rounded-xl px-11 py-6 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Sports cates</h2>                     
                                  <p><span id="productAmount">159.00</span>TK</p>
                                </div>
                              </div>                                                             
                        </div>
                        <!-- third row -->
                        <h1 class="text-center lg:text-left lg:ml-16 text-5xl">Furniture </h1>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 justify-center my-10 mx-auto lg:mx-16">
                            <div onclick="clickContainer(this)"  class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod7.png" alt="Shoes" class="rounded-xl px-11 py-8 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Single Relax Chair</h2>                     
                                  <p><span id="productAmount">185.00</span>TK</p>
                                </div>
                              </div> 
                              <div onclick="clickContainer(this)"  class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod8.png" alt="Shoes" class="rounded-xl px-11 py-6 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Children play</h2>                     
                                  <p><span id="productAmount">299.00</span>TK</p>
                                </div>
                              </div> 
                              <div  onclick="clickContainer(this)" class="card w-auto bg-base-100 shadow-xl cursor-pointer">
                                <figure class="px-10 pt-10">
                                  <img src="./images/prod9.png" alt="Shoes" class="rounded-xl px-11 py-10 shadow-xl mb-5" />
                                </figure>  
                                <div class="card-body items-center text-center"> 
                                    <div class="rating">
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                                      </div>
                                    <h2 class="card-title">Flexible Sofa</h2>                     
                                  <p><span id="productAmount">339.00</span>TK</p>
                                </div>
                              </div>                                                             
                        </div>
                    </div>

                </div>
            <!-- second div -->

            <!-- right coloumn -->
            <div class="w-auto lg:w-1/4 m-6 text-center lg:text-left">
               <div class="shadow-xl p-4 rounded">
                <h2 class="text-2xl">Have coupon?</h2>
                <div class="flex flex-row my-4">
                    <input id="inputField" class="h-10 relative rounded-l-lg w-full rounded-r-lg" style="border: 1px solid rgba(0, 0, 0, 0.203);" type="text" placeholder="Coupon code">
                    <button id="submitButton" class="bg-[#e527b257] p-2 absolute rounded-r-lg text-white right-10 lg:right-24" disabled>Apply</button>
                </div>
               </div>

            <div class="shadow-xl p-4 rounded-xl">
              <div id="itemNameList" class="mt-12">

              </div>
              <hr class="my-7">   
            
              <div class="text-2xl">Total Prices:<span id="totalAmount">00.00</span>Tk</div>
              <div class="text-2xl my-5">Discount:<span id="discountAmount">00.00</span>Tk</div>
              <div class="text-2xl">Total:<span id="newtotalAmount">00.00</span>Tk</div>

              <!-- Open the modal using ID.showModal() method -->
              <hr class="mt-7">
             <div>
              <button class=" bg-[#e527b257] px-6 py-4 rounded-md text-white text-2xl mt-9 w-full h-auto" disabled onclick="my_modal_5.showModal()" id="purchButton" >Make Purchase</button>
              <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
              <form method="dialog" class="modal-box text-center">
                  <img class="mx-auto w-auto" src="./images/congo.png" alt="">
                  <h3 class="font-bold text-lg">Congratulations!</h3>
                  <p class="py-4">Your Purchase the product</p>
                  <div class="modal-action text-left">
                  <!-- if there is a button in form, it will close the modal -->
                  <button id="moduleId" class="mx-auto w-auto bg-[#E527B2] text-white px-6 py-4 rounded-md">Go Home</button>
                  </div>
              </form>
              </dialog>
             </div>
            </div>
            </div>
        </section>
    </main>
    <!-- Footer part -->
    <footer>
  <div class="footer p-10 mt-9 bg-base-200 text-base-content">
  <aside>
    <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
    <p>ACME Industries Ltd.<br/>Providing reliable tech since 1992</p>
  </aside> 
  <nav>
    <header class="footer-title">Services</header> 
    <a class="link link-hover">Branding</a> 
    <a class="link link-hover">Design</a> 
    <a class="link link-hover">Marketing</a> 
    <a class="link link-hover">Advertisement</a>
  </nav> 
  <nav>
    <header class="footer-title">Company</header> 
    <a class="link link-hover">About us</a> 
    <a class="link link-hover">Contact</a> 
    <a class="link link-hover">Jobs</a> 
    <a class="link link-hover">Press kit</a>
  </nav> 
  <nav>
    <header class="footer-title">Legal</header> 
    <a class="link link-hover">Terms of use</a> 
    <a class="link link-hover">Privacy policy</a> 
    <a class="link link-hover">Cookie policy</a>
  </nav>
    </div>
    <div class="footer footer-center p-4 bg-base-300 text-base-content">
  <aside>
    <p>Copyright © 2023 - All right reserved by ACME Industries Ltd</p>
  </aside>
    </div>
    </footer>
    <script src="./script.js"></script>
</body>
</html>