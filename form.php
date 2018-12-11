 <form class = "form_reserv" method="POST">
            <h2>БРОНИРОВАНИЕ НОМЕРА</h2>

              <!-- <fieldset> -->
                <!-- <legend>Бронирование</legend> -->
                  
                  <p>
                    <strong>Выберите тип номера:</strong>
                  </p>
                  <p> 
                    <select class = "row_reserv check_reserv" name="room_name">
                      <option selected value="single">Single</option>
                      <option value="double">Double</option>
                      <option value="delux">Delux</option>
                      <option value="family">Family</option>
                      <option value="royal">Royal</option>
                      <option value="appartment">Appartment</option>
                    </select>
                  </p>
                  <br> 
                  <p>
                   <strong> Укажите количество гостей:</strong>
                  </p>

                  <p> 
                    <select class = "row_reserv check_reserv" name="adult">
                      <option selected value="1">Взрослых</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </p>
                  <p> 
                    <select class = "row_reserv check_reserv" name="child">
                      <option selected value="0">Детей</option>
                      <option value="0">Без детей</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </p>
                  <br> 
                  <p>
                    <strong>Даты пребывания:</strong>
                    <br>
                  </p>
                  <p class="p_small">
                    Заезд:
                  </p>
                  <p class="p_small">
                    <input class = "row_reserv_small" type="date" name="date_in" required>
                  </p> 
                  <p class="p_small">
                    Выезд:
                  </p>
                  <p>
                    <input class = "row_reserv_small" type="date" name="date_out" required>
                  </p>
                  <br>
                  <p>
                    <strong>Ваши данные:</strong>
                  </p>
                  <p>
                    <input class = "row_reserv" type="text" name="guest_name" placeholder= "Ваше имя">
                  </p>
                  <p>
                    <input class = "row_reserv" type="text" name="guest_surname" placeholder="Ваша фамилия">
                  </p>
                  <p>
                    <input class = "row_reserv" type="phone" name="guest_phone" min="6" max="10" placeholder="Телефон" required>
                  </p>
                  <p>
                    <input class = "row_reserv" type="email" name="guest_mail" placeholder="Адрес электронной почты" required>
                  </p>
            
                  <br>
                  <input class = "btn_reserv" type="submit" value="забронировать">

              <!-- </fieldset> -->

            </form>