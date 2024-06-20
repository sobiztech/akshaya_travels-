<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Akshaya Travels">
    <meta name="author" content="Sobiztech Pvt Ltd">
    <meta name="keywords" content="Sri Lanka Travel, Sri Lanka Tours, Sri Lanka Holiday Packages, Sri Lanka Vacation, Sri Lanka Travel Agency, Tour Operators Sri Lanka, Travel Services Sri Lanka, Luxury Travel Sri Lanka, Sri Lanka Adventure Tours, Sri Lanka Wildlife Tours, Sri Lanka Beach Holidays, Cultural Tours Sri Lanka, Family Holidays Sri Lanka, Eco Tours Sri Lanka, Sri Lanka Travel Deals, Budget Travel Sri Lanka, Sri Lanka Tourist Attractions, Sri Lanka Travel Planner, Customized Tours Sri Lanka, Sri Lanka Honeymoon Packages, All-inclusive Packages Sri Lanka, Sri Lanka Group Tours, Sri Lanka Travel Guide, Travel Sri Lanka Safely, Sri Lanka Travel Tips, Explore Sri Lanka, Best Travel Agency Sri Lanka, Book Tours Sri Lanka, Sri Lanka Guided Tours, Sri Lanka Destination Management, Sri Lanka Travel Itinerary, Sri Lanka Tourism, Sri Lanka Adventure Activities, Cultural Experiences Sri Lanka, Nature Tours Sri Lanka, Sri Lanka Historical Sites, Sri Lanka Beaches, Sri Lanka Mountains, Sri Lanka Islands, Sri Lanka City Tours, Travel Sri Lanka Offers, Tour Packages Sri Lanka, Discover Sri Lanka, Sri Lanka Travel Experts, Sri Lanka Travel and Tours, Sri Lanka Holiday Planning, Sri Lanka Tour Deals, Sri Lanka Cruise Tours, Sri Lanka Travel Packages, Top Travel Agency Sri Lanka, Jaffna Travel, Jaffna Tours, Jaffna Holiday Packages, Northern Province Travel, Northern Province Tours, Explore Jaffna, Visit Jaffna, Jaffna Cultural Tours, Jaffna City Tours, Jaffna Tourist Attractions, Jaffna Historical Sites, Jaffna Cultural Experiences, Jaffna Heritage Tours, Northern Province Travel Guide, Jaffna Travel Packages, Jaffna Tour Operators, North Sri Lanka Tours, North Sri Lanka Travel, Jaffna Sightseeing, Jaffna Travel Agency, Jaffna Destination Management, Cultural Heritage Jaffna, Jaffna Travel Deals, Jaffna Eco Tours, Adventure Tours Jaffna, Jaffna Historical Tours, Jaffna Food Tours, Jaffna Travel Itinerary, Jaffna Religious Sites, Explore Northern Province, Northern Sri Lanka Tours, North Sri Lanka Adventure, Travel North Sri Lanka, Jaffna Custom Tours, Jaffna Beaches, Jaffna Islands, Jaffna Nature Tours, North Province Travel Experts, Jaffna Travel Planner, Jaffna Vacation Deals, Sri Lanka Visa Services, Sri Lanka Tourist Visa, Sri Lanka Visa Assistance, Sri Lanka Visa Application, Sri Lanka Travel Visa, Sri Lanka Business Visa, Sri Lanka Visa Processing, Visa Requirements Sri Lanka, Sri Lanka Visa Consultation, Sri Lanka Visa Guide, Visa Services Sri Lanka, Sri Lanka Visa Support, Sri Lanka Visa Extension, Sri Lanka Visa Help, Sri Lanka Visa Information, Sri Lanka Student Visa, Student Visa Assistance Sri Lanka, Student Visa Services Sri Lanka, Study Visa Sri Lanka, Sri Lanka Study Visa Application, Tourist Visa Services Sri Lanka, Tourist Visa Assistance Sri Lanka, Tourist Visa Processing Sri Lanka, Sri Lanka Visa for Tourists, Sri Lanka Tourist Visa Guide, Airline Ticket Booking Sri Lanka, Cheap Flights Sri Lanka, Flight Booking Sri Lanka, Book Flights Sri Lanka, Sri Lanka Air Ticket Booking, Sri Lanka Flight Deals, International Flight Booking Sri Lanka, Sri Lanka Airline Tickets, Parcel Service Sri Lanka, Courier Services Sri Lanka, Parcel Delivery Sri Lanka, International Parcel Service Sri Lanka, Domestic Parcel Service Sri Lanka, Package Delivery Sri Lanka, Sri Lanka Parcel Shipping, Express Parcel Service Sri Lanka, Van Hire Service Sri Lanka, Van Rental Sri Lanka, Sri Lanka Van Hire, Vehicle Hire Sri Lanka, Sri Lanka Car and Van Hire, Sri Lanka Transport Services, Sri Lanka Van Rentals, Van Hire for Tours Sri Lanka, Tourist Transport Sri Lanka, Van Hire for Travel Sri Lanka">

    @include('layouts.components.styles')

</head>

<body class="ltr app horizontal landing-page">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page bg-purple-gradient">
        <div class="page-main">

            @include('layouts.components.header')

            @include('layouts.components.sidebar')

            <!--app-content open-->
            <div class="hor-content main-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container">

                        @yield('content')

                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>

        @yield('modal')

        @include('layouts.components.footer')

    </div>
    <!-- page -->

    @include('layouts.components.scripts')

</body>

</html>