import React from "react";
import { people01 } from "../contants";
const Card = () => (
  <div>
    <div className="card">
      <div className="card-header">
        <img src={people01} alt="img" />
        <span>Username</span>
      </div>
      <div className="card-body">
        <h3>Dev React</h3>
        <p className={`font-Roboto text-bold`}>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
          veritatis alias beatae nobis quae ratione repellat ea, itaque ipsam
          aliquam, expedita sit nulla odio vero officia error aut cupiditate
          laboriosam?
        </p>
      </div>
    </div>

    <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
      <div class="flex-shrink-0">
        <img class="h-12 w-12" src={people01} alt="ChitChat Logo" />
      </div>
      <div>
        <div class="text-xl font-medium text-black">ChitChat</div>
        <p class="text-gray-500">You have a new message!</p>
      </div>
    </div>
  </div>
);

export default Card;
