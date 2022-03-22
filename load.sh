#!/bin/bash

SEC=10
timeout ${SEC}s sha1sum /dev/zero &
