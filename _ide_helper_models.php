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
 * App\Asignacion
 *
 * @property int $id
 * @property int $table_id
 * @property int $testigo_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Table $table
 * @property-read \App\Testigo $testigo
 * @method static \Illuminate\Database\Eloquent\Builder|Asignacion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Asignacion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Asignacion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Asignacion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asignacion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asignacion whereTableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asignacion whereTestigoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asignacion whereUpdatedAt($value)
 */
	class Asignacion extends \Eloquent {}
}

namespace App{
/**
 * App\Candidate
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Votation[] $votation
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Candidate dataTableQuery($column = 'id', $orderBy = 'asc', $searchValue = '')
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Leader> $leaders
 * @property-read int|null $leaders_count
 * @property-read int|null $votation_count
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate eloquentQuery($orderBy = 'id', $orderByDir = 'asc', $searchValue = '', $relationships = [])
 */
	class Candidate extends \Eloquent {}
}

namespace App{
/**
 * App\E14
 *
 * @property int $id
 * @property string $path
 * @property int $table_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Table $table
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 whereTableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\E14 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class E14 extends \Eloquent {}
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
 * @property int $candidate_id
 * @property-read \App\Candidate $candidate
 * @property-read int|null $voters_count
 * @method static \Illuminate\Database\Eloquent\Builder|Leader whereCandidateId($value)
 */
	class Leader extends \Eloquent {}
}

namespace App{
/**
 * App\Message
 *
 * @property int $id
 * @property string $name
 * @property string $message
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Message extends \Eloquent {}
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
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Table> $tables
 * @property-read int|null $tables_count
 * @property-read int|null $voters_count
 */
	class Point extends \Eloquent {}
}

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
 * @property-read mixed $short_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Voter[] $voters
 * @property int $zone_id
 * @property-read int|null $leaders_count
 * @property-read int|null $voters_count
 * @property-read \App\Zone $zone
 * @method static \Illuminate\Database\Eloquent\Builder|Sector whereZoneId($value)
 */
	class Sector extends \Eloquent {}
}

namespace App{
/**
 * App\Table
 *
 * @property int $id
 * @property int $number
 * @property int $nvoters
 * @property int $point_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Votation $votation
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table whereNvoters($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table wherePointId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Table whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\E14|null $E14
 * @property-read \App\Asignacion|null $asignacion
 * @property-read mixed $full_name
 * @property-read \App\Point $point
 */
	class Table extends \Eloquent {}
}

namespace App{
/**
 * App\Testigo
 *
 * @property int $id
 * @property string $cedula
 * @property string $name
 * @property string $lastname
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Asignacion> $asignacions
 * @property-read int|null $asignacions_count
 * @property-read mixed $full_name
 * @method static \Illuminate\Database\Eloquent\Builder|Testigo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testigo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testigo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Testigo whereCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testigo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testigo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testigo whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testigo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testigo wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testigo whereUpdatedAt($value)
 */
	class Testigo extends \Eloquent {}
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
 * @property-read int|null $notifications_count
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Votation
 *
 * @property int $id
 * @property int $table_id
 * @property int $candidate_id
 * @property int $votes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Candidate $candidate
 * @property-read \App\Table $table
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereTableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Votation whereVotes($value)
 * @mixin \Eloquent
 */
	class Votation extends \Eloquent {}
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
 * App\Zone
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Sector> $sectors
 * @property-read int|null $sectors_count
 * @method static \Database\Factories\ZoneFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereUpdatedAt($value)
 */
	class Zone extends \Eloquent {}
}

