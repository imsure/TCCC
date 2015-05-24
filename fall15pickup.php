<form action="pickup-action.php" method="post" />
  <div>
    <label for="name">Name*:</label>
    <input type="text" name="name" id="name" />
  </div>
  <div>
    <fieldset>
      <legend for="">Gender*:</legend>
      <input type="radio" required name="gender" id="r1" value="Male" /><label for="r1">Male </label>
      <input type="radio" required name="gender" id="r2" value="Female" /><label for="r2">Female </label>
    </fieldset>
  </div>
  <div>
    <label for="email">Email*:</label>
    <input type="email" required name="email" id="email"/>
  </div>
  <div>
    <label for="airline">Airline*:</label>
    <input type="text" name="airline" id="airline" />
  </div>
  <div>
    <label for="flightnum">FlightNum*:</label>
    <input type="text" name="flightnum" id="flightnum" />
  </div>
  <div>
    <label for="arrivetime">Time of Arrival*:</label>
    <input type="datetime-local" name="arrivetime" id="arrivetime" />
  </div>
  <div>
    <label for="phone">Phone:</label>
    <input type="tel" name="phone" id="phone" pattern="\d+" />
  </div>
  <div>
    <label for="wechat">WeChat:</label>
    <input type="text" name="wechat" id="wechat" />
  </div>
  <div>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" />
  </div>
  <div>
    <label for="numbags">Number of Bags:</label>
    <input type="text" name="numbags" id="numbags" />
  </div>
  <div>
    <label for="notes">Notes:</label>
    <input type="textarea" name="notes" id="notes" />
  </div>

  <div class="button">
    <button type="submit">Submit</button>
  </div>
</form>
