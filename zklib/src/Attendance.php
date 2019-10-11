<?php

namespace ZK;

use ZKLib;

class Attendance
{
    /**
     * @param ZKLib $self
     * @return array [uid, id, state, timestamp]
     */
    public function get(ZKLib $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_ATT_LOG_RRQ;
        $command_string = '';

        $session = $self->_command($command, $command_string, Util::COMMAND_TYPE_DATA);
        if ($session === false) {
            return [];
        }

        $attData = Util::recData($self);

        $attendance = [];
        

        return $attData;
    }

    /**
     * @param ZKLib $self
     * @return bool|mixed
     */
    public function clear(ZKLib $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_CLEAR_ATT_LOG;
        $command_string = '';

        return $self->_command($command, $command_string);
    }
}
