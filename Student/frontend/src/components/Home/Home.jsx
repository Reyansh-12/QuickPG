import "../../assets/style/home.css";
import { useEffect, useRef } from "react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { IoFastFood, IoHomeOutline } from "react-icons/io5";
import { RiMoneyRupeeCircleFill } from "react-icons/ri";
import { FaWifi } from "react-icons/fa";
import { FaArrowRightLong } from "react-icons/fa6";
import { BsStarFill } from "react-icons/bs";
import  building  from "../../assets/images/building.avif";
import { LuUsers } from "react-icons/lu";
import { FaLongArrowAltRight } from "react-icons/fa";
import { LiaUsersCogSolid } from "react-icons/lia";

const Home = () => {
    const pageRef = useRef(null);

    useEffect(() => {
        gsap.registerPlugin(ScrollTrigger);
        const scope = pageRef.current;
        if (!scope) return;

        const interactiveNodes = scope.querySelectorAll(".js-hover-lift, .js-hover-btn");
        const cleanups = [];

        interactiveNodes.forEach((node) => {
            const onEnter = () => {
                gsap.to(node, {
                    y: -8,
                    scale: 1.02,
                    boxShadow: "0 22px 45px rgba(11, 23, 43, 0.18)",
                    duration: 0.25,
                    ease: "power2.out"
                });
            };

            const onLeave = () => {
                gsap.to(node, {
                    y: 0,
                    scale: 1,
                    boxShadow: "0 10px 24px rgba(11, 23, 43, 0.1)",
                    duration: 0.25,
                    ease: "power2.out"
                });
            };

            node.addEventListener("mouseenter", onEnter);
            node.addEventListener("mouseleave", onLeave);
            cleanups.push(() => {
                node.removeEventListener("mouseenter", onEnter);
                node.removeEventListener("mouseleave", onLeave);
            });
        });

        return () => cleanups.forEach((cleanup) => cleanup());
    }, []);

    useEffect(() => {
        const scope = pageRef.current;
        if (!scope) return;

        const sections = scope.querySelectorAll(".js-scroll-reveal");
        const animations = [];

        sections.forEach((section) => {
            const heading = section.querySelector(".filter-heading, .heading");
            const cards = section.querySelectorAll(".js-hover-lift, .step-card, .testimonial-card");

            if (heading) {
                animations.push(
                    gsap.fromTo(
                        heading,
                        { opacity: 0, y: 28 },
                        {
                            opacity: 1,
                            y: 0,
                            duration: 0.7,
                            ease: "power2.out",
                            scrollTrigger: {
                                trigger: section,
                                start: "top 80%"
                            }
                        }
                    )
                );
            }

            if (cards.length) {
                animations.push(
                    gsap.fromTo(
                        cards,
                        { opacity: 0, y: 30 },
                        {
                            opacity: 1,
                            y: 0,
                            duration: 0.6,
                            stagger: 0.08,
                            ease: "power2.out",
                            scrollTrigger: {
                                trigger: section,
                                start: "top 75%"
                            }
                        }
                    )
                );
            }
        });

        return () => {
            animations.forEach((anim) => {
                anim.scrollTrigger?.kill();
                anim.kill();
            });
        };
    }, []);

    const filters = [
        { icon: <LuUsers />, label: "For Students" },
        { icon: <IoHomeOutline />, label: "For Working" },
        { icon: <LuUsers />, label: "Girls Only" },
        { icon: <LuUsers />, label: "Boys Only" },
        { icon: <IoHomeOutline />, label: "Luxury" },
        { icon: <LiaUsersCogSolid />, label: "Co-living" }
    ];

    const features = [
        { icon: <FaWifi />, title: "Zero Security Deposit", desc: "Move in without paying any deposit. Pay only your first month rent." },
        { icon: <IoFastFood />, title: "Every Listing Verified", desc: "Each property is inspected by our team before going live." },
        { icon: <RiMoneyRupeeCircleFill />, title: "Instant Online Booking", desc: "Reserve your bed in minutes with secure payment support." }
    ];

    return (
        <>
            <div ref={pageRef} className="home-modern">
                <section className="hero-section js-scroll-reveal">
                    <div className="hero-overlay">
                        <div className="container py-5">
                            <p className="highlight">INDIA'S SMARTEST PG FINDER</p>
                            <h1 className="heading">Welcome to Quick PG</h1>
                            <h5 className="sub-heading">Find your perfect PG & hostel in minutes</h5>
                            <div className="explore-card js-hover-lift">
                                <span className="explore-btn">₹0</span>
                                <div>
                                    <h3>Zero Security Deposit</h3>
                                    <p className="mb-0">Move in without paying any deposit. Just your first month rent.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section className="container py-5 js-scroll-reveal">
                    <div className="search-box p-4 p-md-5 rounded-4">
                        <div className="d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <h1 className="filter-heading mb-0">Find Your <em>Perfect</em> PG</h1>
                            <a href="#" className="modern-link js-hover-btn">View All <FaLongArrowAltRight className="ms-1" /></a>
                        </div>
                        <ul className="filter-grid mt-4">
                            {filters.map((item) => (
                                <li key={item.label} className="find-card js-hover-lift">
                                    <span className="fs-4">{item.icon}</span>
                                    {item.label}
                                </li>
                            ))}
                        </ul>
                    </div>
                </section>

                <section className="container pb-5 js-scroll-reveal">
                    <div className="row g-4">
                        <div className="col-lg-8">
                            <article className="card hostel-card js-hover-lift">
                                <div className="ribbon">Top Rated</div>
                                <div className="badge-modern">Available</div>
                                <img src={building} alt="Hostel 1" className="card-img-top" />
                                <div className="card-body p-4">
                                    <div className="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                        <span className="boys">Boys Hostel</span>
                                        <span className="rating"><BsStarFill /> 4.5 (50)</span>
                                    </div>
                                    <h5 className="card-title mt-3">Cozy PG in Koregaon Park</h5>
                                    <ul className="hostel-chip-list">
                                        <li>Premium Food</li>
                                        <li>AC</li>
                                        <li>Fully Furnished</li>
                                        <li>Laundry</li>
                                        <li>WiFi</li>
                                    </ul>
                                    <p className="price-tag">₹7,500 / month</p>
                                    <div className="d-flex gap-2 flex-wrap">
                                        <button className="btn btn-success js-hover-btn">WhatsApp</button>
                                        <button className="btn btn-warning js-hover-btn">Schedule Visit</button>
                                        <a href="#" className="view-link">View Details <FaArrowRightLong /></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div className="col-lg-4">
                            <div className="d-flex flex-column gap-4 h-100">
                                <article className="card p-4 mini-card js-hover-lift">
                                    <h5>Modern PG in Indiranagar</h5>
                                    <p className="mb-0">Spacious rooms with meals, housekeeping, and 24/7 support. ₹8,000/month</p>
                                </article>
                                <article className="card p-4 mini-card js-hover-lift">
                                    <h5>Affordable PG in Baner</h5>
                                    <p className="mb-0">Budget-friendly plans with essentials covered. Starting ₹6,500/month</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>

                <section className="container py-5 js-scroll-reveal">
                    <div className="row g-4 align-items-center">
                        <div className="col-lg-6">
                            <h1 className="filter-heading">India's most <em>trusted</em> PG platform</h1>
                            <ul className="trusted-list mt-4">
                                {features.map((item) => (
                                    <li key={item.title} className="trusted-card js-hover-lift">
                                        <span className="trusted-icon">{item.icon}</span>
                                        <div>
                                            <h5 className="about-title">{item.title}</h5>
                                            <p className="mb-0">{item.desc}</p>
                                        </div>
                                    </li>
                                ))}
                            </ul>
                        </div>
                        <div className="col-lg-6">
                            <img src={building} alt="Why Choose Quick PG?" className="img-fluid shadow-lg rounded-4 stamp" />
                        </div>
                    </div>
                </section>

                <section className="how-works py-5 js-scroll-reveal">
                    <div className="container">
                        <span className="text-white">How it works</span>
                        <h1 className="text-white filter-heading">Move in in <em>4 easy steps</em></h1>
                        <ul className="steps-grid mt-4">
                            <li className="step-card js-hover-lift">
                                <h2>01</h2>
                                <h5>Search & Filter</h5>
                                <p>Use filters to discover hostels by location, amenities, and budget.</p>
                            </li>
                            <li className="step-card js-hover-lift">
                                <h2>02</h2>
                                <h5>Book Instantly</h5>
                                <p>Reserve your PG online with a secure and simple booking flow.</p>
                            </li>
                            <li className="step-card js-hover-lift">
                                <h2>03</h2>
                                <h5>Move In</h5>
                                <p>Pick your move-in date and collect your keys without paperwork stress.</p>
                            </li>
                            <li className="step-card js-hover-lift">
                                <h2>04</h2>
                                <h5>Enjoy Your Stay</h5>
                                <p>Experience comfortable living with verified services and support.</p>
                            </li>
                        </ul>
                    </div>
                </section>

                <section className="container py-5 js-scroll-reveal">
                    <h1 className="filter-heading">Loved by <em>thousands</em></h1>
                    <div className="testimonial-grid mt-4">
                        <article className="testimonial-card js-hover-lift">
                            Found my dream PG in under 10 minutes. Zero deposit helped me relocate stress free.
                        </article>
                        <article className="testimonial-card js-hover-lift">
                            Property photos matched reality. Booking and move-in were both super smooth.
                        </article>
                        <article className="testimonial-card js-hover-lift">
                            Helpful support team and verified listings. I got exactly what I needed.
                        </article>
                    </div>
                </section>

                <section className="container pb-5 js-scroll-reveal">
                    <div className="cta-box d-flex row align-items-center p-4 p-md-5">
                        <div className="col-lg-8">
                            <h1>Your perfect PG is one search away</h1>
                            <p className="mb-0">Join 50,000+ tenants who found their home on QuickPG</p>
                        </div>
                        <div className="col-lg-4 d-flex justify-content-lg-end mt-3 mt-lg-0">
                            <button className="btn btn-warning btn-lg js-hover-btn">Find My PG Now <FaArrowRightLong /></button>
                        </div>
                    </div>
                </section>
            </div>
        </>
    );
};
export default Home;