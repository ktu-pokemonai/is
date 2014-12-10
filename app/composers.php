<?php

View::composer('user.reservations.calendar', 'EquipmentCalendarComposer');
View::composer('user.reservations.show', 'EquipmentDayComposer');
View::composer([
    'admin.penalties.create',
    'admin.messages.form',
], 'UserListComposer');

View::composer([
    'manager.guests.form',
    'manager.keys.create',
], 'GroupedUserListComposer');