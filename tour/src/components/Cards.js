import React from 'react';
import './Cards.css';
import CardItem from './CardItem';

function Cards() {
  return (
    <div className='cards'>
      <h1>Check out these EPIC Destinations!</h1>
      <h3>Explore our India</h3>
      <div className='cards__container'>
        <div className='cards__wrapper'>
          <ul className='cards__items'>
            <CardItem
              src='images/p-2.jpg'
              text="The valleys of Kashmir are untamed and unspoilt. Surrounded by the sublime mountains, these valleys echo nature, beauty and a certain level of mysticism. Charming lakes: The lakes in Kashmir are crystal clear, stunning and pristine. Srinagar boasts of the Dal and Nageen Lakes which are stunning."
              label='Adventure'
              path='/services'
            />
            <CardItem
              src='images/p-6.jpg'
              text="Delhi, the capital of India, offers a sedate blend of culture, art and modern architecture. It attracts thousands of tourists every year with its mesmerizing natural scenic wonders and awe inspiring development."
              label='Luxury'
              path='/services'
            />
          </ul>
          <ul className='cards__items'>
            <CardItem
              src='images/p-1.jpg'
              text='Mumbai, previously known as Bombay is one of the most populous and biggest cities of Maharashtra. Also the biggest metropolis of this state, Mumbai is also popular as the entertainment and financial capital. It is the largest city of India and fondly called as the city of dreams.'
              label='Mystery'
              path='/services'
            />
            <CardItem
              src='images/p-3.jpg'
              text='Experience Football on Top of the Himilayan Mountains'
              label='Adventure'
              path='/products'
            />
            <CardItem
              src='images/p-5.jpg'
              text='It is also known as Devbhoomi and is famous for its tourist sites. People came here the most holy pilgrimage of the Chaardhaams, the four memorials of Gangotri, Yamunotri, Badrinath and Kedarnath.'
              label='Adrenaline'
              path='/sign-up'
            />
          </ul>
        </div>
      </div>
    </div>
  );
}

export default Cards;
