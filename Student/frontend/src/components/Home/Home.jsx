import "../../assets/style/home.css";
import { CgBoy, CgGirl } from "react-icons/cg";
import { IoHome, IoFastFood } from "react-icons/io5";
import { RiMoneyRupeeCircleFill } from "react-icons/ri";
import { FaWifi } from "react-icons/fa";
import { FaArrowRightLong } from "react-icons/fa6";
import { BsStarFill } from "react-icons/bs";
import  building  from "../../assets/images/building.avif";


const Home = () => {
    return (
        <>
            <div className="hero-section">
                <div className="cont m-0 pt-5 h-100 ">
                <p className="text-center highlight rounded-2 ps-3"><span className="rounded-5"></span>INDIA'S SMARTEST PG FINDER</p>
                <h1 className="ms-5 heading text-white fw-bold">Welcome to Quick PG</h1>
                <h5 className="ms-5 sub-heading text-white fw-bold">Find your perfect PG & hostel</h5>
                <div className="d-flex justify-content-start mt-5 bg-warning p-3 rounded-2 explore-card">
                    <span className="ms-3 me-4 explore-btn rounded-2 border-0 p-2">₹0</span>
                    <div>
                        <h3>Zero Security Deposit</h3>
                        <p>Move In without paying any deposit. Just pay your first month's rent</p>
                    </div>
                </div>
                </div>
            </div>
            <div className="">
                <div className="card search-box shadow-lg mt-5 p-5 rounded-4">
                    <h1 className="filter-heading">Find Your <em>Perfect</em> PG</h1>
                    <p>Search by city, locality, or landmark</p>
                    <div className="d-flex search justify-content-start rounded-3 p-2 align-items-center gap-1">
                        <input type="search" className="border border-0 p-2 bg-transparent" placeholder="e.g Koregaon Park, Pune, or Indiranagar, Bangalore" style={{width: '89%'}} />
                        <button className="btn text-black bg-warning">Search PG</button>
                    </div>
                    <div className="list">
                        <ul className="d-flex gap-4 justify-content-start mt-3">
                            <li className="fw-bold bg-transparent">QUICK FILTER</li>
                            <li className="border border-success"><CgBoy /> Boys PG</li>
                            <li><CgGirl />Girls PG</li>
                            <li><IoHome />Co-living</li>
                            <li><IoFastFood />With Meals</li>
                            <li><RiMoneyRupeeCircleFill />Under 8K</li>
                            <li><FaWifi />WiFi Included</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <div className="d-flex row w-100">
                    <div className="col-md-6 p-5">
                        <h1 className="filter-heading">India's most <em>trusted</em> <br />PG platform</h1>
                        <ul className="d-flex flex-column gap-3 justify-content-start mt-4">
                            <li className="d-flex gap-3 align-items-center bg-white shadow-lg border border-warning p-3 rounded-3">
                                <span className="rounded-5 bg-warning p-2"><FaWifi /></span>
                                <div>
                                    <h5 className="about-title">Zero Security Deposit</h5>
                                    <span style={{fontSize:'15px'}}>Move in without paying any deposit. Just your first month's rent and you're home. No broker fees ever.</span>
                                </div>
                            </li>
                            <li className="d-flex gap-3 align-items-center bg-white shadow-lg border border-warning p-3 rounded-3">
                                <span className="rounded-5 bg-warning p-2"><IoFastFood /></span>
                                <div>
                                    <h5 className="about-title">Every Listing Verified</h5>
                                    <span style={{fontSize:'15px'}}>Our team personally inspects every property before it goes live. No scams, no surprises — guaranteed.</span>
                                </div>
                            </li>
                            <li className="d-flex gap-3 align-items-center bg-white shadow-lg border border-warning p-3 rounded-3">
                                <span className="rounded-5 bg-warning p-2"><RiMoneyRupeeCircleFill /></span>
                                <div>
                                    <h5 className="about-title">Instant Online Booking</h5>
                                    <span style={{fontSize:'15px'}}>Book and confirm your PG in under 2 minutes. Move in the same day if you want.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div className="col-md-6 pt-5">
                        <img src={building} alt="Why Choose Quick PG?" className="img-fluid shadow-lg rounded-5 mt-5 stamp" 
                        style={{height:'450px'}}/>
                    </div>
                </div>
            </div>

           <div className="hostel-cards">
                <h1 className="filter-heading ms-5 mt-4">Explore Popular PGs</h1>
                <div className="hostel-cards p-3">
                    <ul className="d-flex justify-content-center  mt-3">
                        <li className="card shadow-lg w-100 ms-0 position-relative">
                        <div class="ribbon">Your text content</div>
                        <div class="badge">Available</div>
                            <img src={building} alt="Hostel 1" className="card-img-top" />
                            <div className="card-body">
                                <div className="d-flex justify-content-end">
                                    <span className="boys">Boys Hostel</span>
                                </div>
                                <h5 className="card-title mt-3">Cozy PG in Koregaon Park</h5>
                                <div className="d-flex hostel-card-list justify-content-start mt-3 mb-3">
                                    <ul className=" d-flex flex-wrap gap-2 justify-content-start p-0">
                                        <li>Premium Food Menu</li>
                                        <li>AC</li>
                                        <li>Fully Furnished</li>
                                        <li>Jain Food</li>
                                        <li>Laundry</li>
                                    </ul>
                                </div>
                                <div className="d-flex mb-3" style={{fontSize:'14px'}}>
                                    <span className="d-flex"><BsStarFill className="mt-1 me-1" /> <span className="">4.5 ( 50 )</span></span>
                                    <span className="ms-3 text-secondary">Single, Double, Triple </span>
                                </div>
                                <p className="card-text fs-5 fw-bold text-secondary">₹7,500/month</p>
                                <div className="d-flex gap-2 mb-3">
                                    <button className="btn btn-success w-50">WhatsApp</button>
                                    <button className="btn btn-warning w-50">Schedule Visit</button>
                                </div>
                                <div className="d-flex justify-content-center">
                                    <a href="" className="text-decoration-none">View Details <FaArrowRightLong /></a>
                                </div>
                            </div>
                        </li>
                        <li className="card w-100 ms-5">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Hostel 2" className="card-img-top" />
                            <div className="card-body">
                                <h5 className="card-title">Modern PG in Indiranagar</h5>
                                <p className="card-text">Spacious rooms with WiFi and meals. ₹8,000/month</p>
                            </div>
                        </li>
                        <li className="card w-100 ms-5">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56
a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Hostel 3" className="card-img-top" />
                            <div className="card-body">
                                <h5 className="card-title">Affordable PG in Baner</h5>
                                <p className="card-text">Budget-friendly rooms with basic amenities. ₹6,500/month</p>
                            </div>
                        </li>
                    </ul>
                </div>
           </div>
           <div>
                <div className="d-flex row w-100 p-5 how-works" style={{backgroundColor: '#0B172B'}}>
                    <div>
                        <span className="text-white">How it works</span>
                        <h1 className="text-white filter-heading">Move in in <em>4 easy steps</em></h1>
                        <ul className="d-flex gap-3 justify-content-start mt-4">
                            <li className="d-flex flex-column gap-2 align-items-center p-3">
                                <h1 className="text-warning dotted-line border border-warning rounded-circle p-3">01</h1>
                                <h5 className="about-title text-white">Search & Filter</h5>
                                <span className="text-secondary" style={{fontSize:'15px'}}>Use our smart filters to find PGs that match your preferences. Search by location, amenities, price, and more.</span>
                            </li>
                            <li className="d-flex flex-column gap-2 align-items-center p-3">
                                <h1 className="text-warning dotted-line border border-warning rounded-circle p-3">02</h1>
                                <h5 className="about-title text-white">Book Instantly</h5>
                                <span className="text-secondary" style={{fontSize:'15px'}}>Found your perfect PG? Book it instantly with our secure online payment system. No paperwork, no hassle.</span>
                            </li>
                            <li className="d-flex flex-column gap-2 align-items-center p-3">
                                <h1 className="text-warning dotted-line border border-warning rounded-circle p-3">03</h1>
                                <h5 className="about-title text-white">Move In</h5>
                                <span className="text-secondary" style={{fontSize:'15px'}}>Get the keys and move in on your preferred date. Our support team is here to assist you every step of the way.</span>
                            </li>
                            <li className="d-flex flex-column gap-2 align-items-center p-3">
                                <h1 className="text-warning border border-warning rounded-circle p-3">04</h1>
                                <h5 className="about-title text-white">Enjoy Your Stay</h5>
                                <span className="text-secondary" style={{fontSize:'15px'}}>Experience hassle-free living with our verified PGs. Enjoy your stay and focus on what matters most to you.</span>
                            </li>
                        </ul>
                    </div>
                </div>
           </div>
           <div className="p-5 w-100">
                <div>
                    <h1>Loved by <em>thousands</em></h1>
                    <div className="d-flex justify-content-center">
                        <ul className="d-flex row-cols-3">
                            <li className="card shadow-lg p-3 ms-0">
                                <p>Found my dream PG in under 10 minutes. The zero deposit policy was a lifesaver when I relocated for my new job. Absolutely seamless experience!</p>
                                <hr />

                            </li>
                            <li className="card shadow-lg p-3 ms-3"></li>
                            <li className="card shadow-lg p-3 ms-3"></li>
                        </ul>
                    </div>
                </div>
           </div>
           <div>
                <div className="d-flex row m-5 shadow-lg border border-warning rounded-4 p-5">
                    <div className="col-lg-8">
                        <h1 className="">Your perfect PG is one search away</h1>
                        <span>Join 50,000+ tenants who found their home on QuickPG</span>
                    </div>
                    <div className="col-lg-4 d-flex justify-content-center align-items-center">
                        <button className="p-3 btn btn-warning ps-5 pe-5 fw-bold">Find My PG Now <FaArrowRightLong /></button>
                    </div>
                </div>
           </div>
        </>
    );
}
export default Home;