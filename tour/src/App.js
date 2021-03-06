import React from 'react';
import Navbar from './components/Navbar';
import HeroSection from './components/HeroSection';
import Cards from './components/Cards';
import Footer from './components/Footer';


import './App.css';
import Home from './components/pages/Home';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

import Services from './components/pages/Services';
import Products from './components/pages/Products';
import SignUp from './components/pages/SignUp';

function App() {
  return (
    <>
      <Router>
        <Navbar />
        <HeroSection />
        <Cards />
        <Footer />
       

        
        <Routes>
          <Route path='/' exact component={Home} />
          <Route path='/services' component={Services} />
          <Route path='/products' component={Products} />
          <Route path='/sign-up' component={SignUp} />
        </Routes>
      </Router>
    </>
  );
}

export default App;
