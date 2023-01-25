import React from "react";

const Navbar = () => (
  <nav className="flex">
    <div className="logo">Logo</div>
    <div className="items">
      <ul className="list-none">
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Profil</a>
        </li>
        <li>
          <a href="#">Settings</a>
        </li>
      </ul>
    </div>
  </nav>
);

export default Navbar;
