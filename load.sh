#!/bin/bash

SEC=5
timeout ${SEC}s sha1sum /dev/zero &
