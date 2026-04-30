import "../../assets/style/header.css";
import { useEffect, useState } from "react";
import { NavLink, Link } from "react-router-dom";

const Header = () => {
    const navItems = [
        { label: "Home", to: "/", end: true },
        { label: "Girls Hostel", to: "/girls-hostel" },
        { label: "Boys Hostel", to: "/owner-home" },
        { label: "Co-living", to: "/co-living" }
    ];
    const [isDarkMode, setIsDarkMode] = useState(false);

    useEffect(() => {
        const savedTheme = localStorage.getItem("quickpg-theme");
        const darkEnabled = savedTheme === "dark";
        setIsDarkMode(darkEnabled);
        document.body.classList.toggle("theme-dark", darkEnabled);
    }, []);

    const handleThemeToggle = () => {
        setIsDarkMode((prev) => {
            const next = !prev;
            document.body.classList.toggle("theme-dark", next);
            localStorage.setItem("quickpg-theme", next ? "dark" : "light");
            return next;
        });
    };

    return (
        <header className="header-wrap">
            <div className="header d-flex align-items-center justify-content-between w-100">
                <div className="brand d-flex align-items-center gap-2">
                    <Link to="/" className="brand-link d-flex align-items-center gap-2 text-decoration-none">
                        <div className="brand-mark" aria-hidden="true">
                            <span className="brand-mark-dot"></span>
                            <span className="brand-mark-bars"></span>
                        </div>
                        <h3 className="brand-title mb-0">
                            Quick<span>PG</span>
                            <small>Verified Stays</small>
                        </h3>
                    </Link>
                </div>

                <nav className="header-nav">
                    <ul className="d-flex list-unstyled mb-0 gap-2 gap-md-3 align-items-center">
                        {navItems.map((item) => (
                            <li key={item}>
                                <NavLink
                                    to={item.to}
                                    end={item.end}
                                    className={({ isActive }) => `nav-pill ${isActive ? "active" : ""}`}
                                >
                                    {item.label}
                                </NavLink>
                            </li>
                        ))}
                    </ul>
                </nav>

                <div className="header-actions d-flex align-items-center gap-2">
                    <button type="button" className="theme-btn border-0" onClick={handleThemeToggle}>
                        {isDarkMode ? "Light" : "Dark"}
                    </button>
                    <button className="account-btn border-0">My Account</button>
                </div>
            </div>
        </header>
    );
};
export default Header;