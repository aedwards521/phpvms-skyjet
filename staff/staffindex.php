<?php
////////////////////////////////////////////////////////////////////////////
//simpilotgroup StaffAdmin 1.0 module for phpVMS virtual airline system   //
//@author David Clark (simpilot)                                          //
//@copyright Copyright (c) 2011, David Clark, All Rights Reserved         //
////////////////////////////////////////////////////////////////////////////
?>
<h3><?php echo SITE_NAME; ?> Staff Members</h3>
<table width="100%" border="1px" cellpadding="5px">
    <tr>
        <th>Image</th>
        <th>Position</th>
        <th>Pilot</th>
        <th>Description</th>
    </tr>
<?php
    if($positions)
    {
        foreach($positions as $position)
        {
            $pilots = StaffData::get_position_members($position->id);
            if($pilots)
            {
                foreach($pilots as $pilot)
                {
                    $pilotdata = PilotData::getPilotData($pilot->pilotid);
                    echo '<tr>';
                    if($position->image != 'none')
                        {
                            echo '<td><img src="'.$position->image.'" alt="'.$position->image.'" /></td>';
                        }
                        else
                        {
                            echo '<td>No Image Available</td>';
                        }
                    echo '<td>'.$position->abbr.' - '.$position->title.'</td>';
                    echo '<td>'.  PilotData::getPilotCode($pilotdata->code, $pilotdata->pilotid).' - '.$pilotdata->firstname.' '.$pilotdata->lastname.'</td>';
                    echo '<td>'.$position->description.'</td>';
                    echo '</tr>';
                }
            }
            else
            {
                echo '<tr>';
                if($position->image != 'none')
                {
                    echo '<td><img src="'.$position->image.'" alt="'.$position->image.'" /></td>';
                }
                else
                {
                    echo '<td>No Image Available</td>';
                }
                echo '<td>'.$position->abbr.' - '.$position->title.'</td>';
                echo '<td>Currently Vacant</td>';
                echo '<td>'.$position->description.'</td>';
                echo '</tr>';
            }
        }
    }
?>
</table>