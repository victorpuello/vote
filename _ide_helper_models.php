<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Sector
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Leader[] $leaders
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $count_leaders
 * @property-read mixed $count_voters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Voter[] $voters
 */
	class Sector extends \Eloquent {}
}

namespace App{
/**
 * App\Voter
 *
 * @property int $id
 * @property string $cedula
 * @property string $name
 * @property string $lastname
 * @property string $phone
 * @property int $sector_id
 * @property int $leader_id
 * @property int $point_id
 * @property int|null $table_number
 * @property int $sufrago
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereLeaderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter wherePointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereSufrago($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereTableNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Voter whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $full_name
 * @property-read \App\Leader $leader
 * @property-read \App\Point $point
 * @property-read \App\Sector $sector
 */
	class Voter extends \Eloquent {}
}

namespace App{
/**
 * App\Point
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Point whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $count_voters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Voter[] $voters
 */
	class Point extends \Eloquent {}
}

namespace App{
/**
 * App\Leader
 *
 * @property int $id
 * @property string $cedula
 * @property string $name
 * @property string $lastname
 * @property string $phone
 * @property int $sector_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Sector $sector
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Voter[] $voters
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Leader whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $full_name
 */
	class Leader extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $type
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUsername($value)
 * @mixin \Eloquent
 * @property-read mixed $perfil
 */
	class User extends \Eloquent {}
}

