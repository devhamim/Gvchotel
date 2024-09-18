@extends('frontend.layout.app')
@section('content')

<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;  background: url('{{ asset('frontend/img/Sub-Banner-5.jpg') }}');">
    <div class="thm-container">
        <h2>Restaurant</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Restaurant</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->

<section class="about-resturants sec-pad pb0">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-8">
                <div class="img-box">
                    <img src="{{ asset('frontend') }}/img/about-resturant.jpg" alt="Awesome Image"/>
                </div><!-- /.img-box -->
            </div><!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="resturant-content">
                    <div class="title">
                        <h3>Welcome to Our <br /><span>Digbypines Restaurant</span></h3>
                        <div class="line"></div><!-- /.line -->
                    </div><!-- /.title -->
                    <p>We are delighted to have you with us, where every detail is crafted to deliver an unforgettable dining experience. From the moment you step inside, we invite you to indulge in the finest culinary creations, curated with the freshest ingredients and prepared by our renowned chefs. Whether you're here to celebrate a special occasion or simply to enjoy a memorable meal, we promise to make your visit exceptional.</p>
                    <br>
                    <p class="highlight">Relax, savor the flavors, and let us take care of the rest. Welcome to a world of gourmet excellence!</p><!-- /.highlight -->
                    <div class="contact-box">
                        <a href="#book-table" class="make-online">To reserve our Restaurant online</a><!-- /.make-online -->
                    </div><!-- /.contact-box -->
                </div><!-- /.resturant-content -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.about-resturants -->

<section class="sec-pad main-dish">
    <div class="thm-container">
        <div class="title">
            <h3>Our Main Dishes</h3>
            <div class="line"></div><!-- /.line -->
        </div><!-- /.title -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-main-dish">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-menu-1-1.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <a href="#"><h3>Gravy veg dish</h3></a>
                        <p>A medley of tender seasonal vegetables simmered in a rich, aromatic gravy, seasoned with herbs and spices, perfect as a hearty side or main course.</p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-main-dish -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-main-dish">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-menu-1-2.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <a href="#"><h3>Nonveg item</h3></a>
                        <p>Tender caribou loin, pan-seared and served with a juniper berry and red wine reduction, accompanied by Yukon gold potatoes and roasted vegetables.</p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-main-dish -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-main-dish">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-menu-1-3.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <a href="#"><h3>Snacks rolls</h3></a>
                        <p>Crispy, golden rolls filled with a savory blend of ingredients like spiced meats, cheeses, or vegetables, perfect for a delightful snack.</p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-main-dish -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-main-dish">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-menu-1-4.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <a href="#"><h3>Special dish</h3></a>
                        <p>An exceptional dish featuring a unique blend of premium ingredients, expertly crafted and presented with exquisite flavors and a touch of culinary artistry.</p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-main-dish -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.sec-pad -->

<section class="menu-tab-title-box">
    <div class="thm-container">
        <div class="title-box">
            <h3>Our Menu</h3>
            <div class="line"></div><!-- /.line -->
        </div><!-- /.title-box -->
    </div><!-- /.thm-container -->
</section><!-- /.menu-tab-title-box -->
<section class="menu-tab-content-box">
    <div class="thm-container">
        <ul class="tab-title">
            <li class="active"><a href="#breakfast" data-toggle="tab">Break fast</a></li><!--
            --><li><a href="#lunch" data-toggle="tab">Lunch</a></li><!--
            --><li><a href="#dinner" data-toggle="tab">Dinner</a></li>
        </ul><!-- /.tab-title -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="breakfast">
                <div class="single-tab-content">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-tab-1-1.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="time-table">
                        <p>Lunch is served from 1 PM to 4 PM</p>
                    </div><!-- /.time-table -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Lemon Ricotta Pancakes with Maple Syrup</h3>
                            <p>Gourmet pancakes made with ricotta cheese and a hint of lemon, served with pure organic maple syrup and seasonal berries.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$25.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Peameal Bacon and Poached Eggs on Brioche</h3>
                            <p>Premium peameal bacon, perfectly poached organic eggs, served on toasted brioche with hollandaise sauce.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$32.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Truffle Scrambled Eggs</h3>
                            <p>Free-range scrambled eggs infused with black truffle, served with a side of grilled sourdough and sautéed spinach.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$28.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Artisan Toast with Whipped Butter and Jam Trio</h3>
                            <p>A selection of house-made sourdough and multigrain toast with a trio of artisan jams and whipped cultured butter.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$$15.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Crispy Herb Potatoes with Aioli</h3>
                            <p>Gourmet home fries tossed with fresh herbs, served with a truffle aioli dipping sauce.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$18.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Organic Sausage Links with Mustard Glaze</h3>
                            <p>Handcrafted organic sausages drizzled with a tangy mustard glaze.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$22.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Seasonal Fruit Platter with Mint and Honey</h3>
                            <p>A beautifully arranged platter of seasonal fresh fruits, lightly dressed with mint and organic honey.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$20.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Specialty Coffee or Tea Selection</h3>
                            <p>A variety of premium hand-brewed coffees or loose-leaf teas.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$10.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Freshly Squeezed Juice</h3>
                            <p>Pressed-to-order juices from organic fruits and vegetables.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$12.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Greek Yogurt with Local Honey and Granola</h3>
                            <p>Rich Greek yogurt, drizzled with local honey and topped with house-made granola.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$19.00</p>
                        </div><!-- /.price-box -->
                    </div>
                </div><!-- /.single-tab-content -->
            </div><!-- /.tab-pane -->
            <div class="tab-pane fade" id="lunch">
                <div class="single-tab-content">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-tab-1-2.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="time-table">
                        <p>Lunch is served from 1 PM to 4 PM</p>
                    </div><!-- /.time-table -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Seared Atlantic Salmon with Maple Glaze</h3>
                            <p>Fresh Atlantic salmon, seared to perfection, glazed with pure maple syrup, and served with roasted seasonal vegetables and a quinoa salad.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$48.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Duck Confit Salad with Candied Pecans</h3>
                            <p>Slow-cooked duck leg served over mixed greens, with candied pecans, poached pears, and a sherry vinaigrette.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$42.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Lobster Bisque</h3>
                            <p>A creamy, rich bisque made with fresh lobster, enhanced with cognac and topped with lobster chunks and herb croutons.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$36.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Prime Rib Burger with Truffle Fries</h3>
                            <p>A gourmet burger made from prime rib beef, topped with aged cheddar, caramelized onions, and truffle aioli, served with a side of hand-cut truffle fries.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$50.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Wild Mushroom Risotto</h3>
                            <p>Arborio rice cooked to a creamy texture, with a blend of wild mushrooms, Parmesan cheese, and white truffle oil.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$38.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Bison Tenderloin with Saskatoon Berry Sauce</h3>
                            <p>Tender bison loin cooked to your preference, paired with a rich Saskatoon berry sauce, served alongside roasted root vegetables.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$65.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Butter-Poached Lobster Roll</h3>
                            <p>Butter-poached lobster in a toasted brioche bun, garnished with lemon aioli and served with a microgreens salad.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$58.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Artisanal Cheese and Charcuterie Board</h3>
                            <p>A curated selection of local cheeses and cured meats, accompanied by house-made jams, honey, and crackers.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$45.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Roasted Beet and Goat Cheese Salad</h3>
                            <p>Oven-roasted beets, fresh goat cheese, candied walnuts, and arugula drizzled with a balsamic reduction.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$32.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Beef Tartare with Quail Egg</h3>
                            <p>Hand-chopped, seasoned beef topped with a raw quail egg, served with toasted baguette slices and mustard aioli.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$44.00</p>
                        </div><!-- /.price-box -->
                    </div>
                </div><!-- /.single-tab-content -->
            </div><!-- /.tab-pane -->
            <div class="tab-pane fade" id="dinner">
                <div class="single-tab-content">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-tab-1-3.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="time-table">
                        <p>Lunch is served from 1 PM to 4 PM</p>
                    </div><!-- /.time-table -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Pan-Seared Foie Gras with Saskatoon Berry Compote</h3>
                            <p>Rich foie gras, pan-seared and served with a sweet and tangy Saskatoon berry compote, toasted brioche, and microgreens.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$55.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Beef Wellington</h3>
                            <p>A tender filet mignon wrapped in puff pastry with mushroom duxelles and prosciutto, served with a red wine reduction and truffle mashed potatoes.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$90.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Maple-Glazed Duck Breast with Root Vegetables</h3>
                            <p>Succulent duck breast glazed with pure maple syrup, paired with roasted root vegetables and a port wine sauce.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$75.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Alberta Wagyu Ribeye Steak</h3>
                            <p>A 12oz Alberta Wagyu ribeye steak, cooked to perfection, with roasted garlic, rosemary, and a side of buttered asparagus.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$150.00</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Nova Scotia Lobster Tail with Drawn Butter</h3>
                            <p>Fresh, steamed lobster tail served with clarified butter, lemon, and a side of saffron risotto.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$95.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Seared Scallops with Cauliflower Purée</h3>
                            <p>Plump sea scallops, seared golden and served on a velvety cauliflower purée with a citrus beurre blanc.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$68.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Wild Game Platter</h3>
                            <p>A selection of premium Canadian wild game, including venison, bison, and elk, served with seasonal vegetables and a rich juniper berry sauce.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$125.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Truffle and Parmesan Risotto</h3>
                            <p>Creamy risotto with shaved black truffles, Parmesan cheese, and a drizzle of white truffle oil.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$55.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Atlantic Halibut with Beurre Blanc</h3>
                            <p>Fresh Atlantic halibut, pan-seared, served with a beurre blanc sauce and accompanied by baby potatoes and sautéed spinach.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$72.00</p>
                        </div><!-- /.price-box -->
                    </div>
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Chef’s Tasting Menu</h3>
                            <p>A multi-course dining experience featuring seasonal ingredients and the chef’s signature dishes, often including amuse-bouche, appetizers, mains, and dessert.</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$200.00</p>
                        </div><!-- /.price-box -->
                    </div>
                </div><!-- /.single-tab-content -->
            </div><!-- /.tab-pane -->
        </div><!-- /.tab-content -->
    </div><!-- /.thm-container -->
</section><!-- /.menu-tab-content-box -->

<section class="book-table" id="book-table">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-7">
                <div class="form-content">
                    <div class="title">
                        <h3>Book a Table</h3>
                    </div><!-- /.title -->
                    <form action="{{ route('restaurant.table.book') }}" method="POST" class="book-table-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Name" name="name" required />
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email" name="email" required />
                            </div>
                            <div class="col-md-6">
                                <input type="number" placeholder="Number" name="number" required />
                            </div>
                            <div class="col-md-6">
                                <input type="date" placeholder="Date" name="date" required />
                            </div>
                            <div class="col-md-6">
                                <input type="time" placeholder="Time" name="time" required />
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Schedule" name="schedule" required />
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Message" name="message" required></textarea>
                                <button type="submit">Reserve Now</button>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </form><!-- /.book-table-form -->
                </div><!-- /.form-content -->
            </div><!-- /.col-md-7 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.book-table -->

@endsection


