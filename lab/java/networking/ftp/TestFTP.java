package com.chenzixin.service;
/* <!-- in case someone opens this in a browser... --> <pre> */

import java.io.*;
import java.util.*;

/* This program/class is meant to test the functionality
 * of the FTPConnection class.
 */

class TestFTP {
    public static void main(String[] args) {
        String serverName;
        FTPConnection ftp = null;

        try {
            if (args.length == 0) {
                serverName = getStringFromUser("Enter the server you would like to connect to: ");
                if (serverName.length() == 0) {
                    return;
                }
            } else {
                serverName = args[0];
            }

            // set the FTPConnection parameter to true if you want to
            // see debug output in your console window
            ftp = new FTPConnection(false);
            System.out.println("Trying to connect anonymously to " + serverName);
            ftp.connect(serverName);

            if (ftp.login("root", "pcauto")) {
                System.out.println("Successfully logged in!");
                System.out.println("System type is: " + ftp.getSystemType());
                System.out.println("Current directory is: " + ftp.getCurrentDirectory());
                String files = ftp.listFiles();
                String subDirs = ftp.listSubdirectories();
                System.out.println("Files in Directory:\n" + files);
                System.out.println("Subdirectories:\n" + subDirs);

                // try to change to the first subdirectory
                StringTokenizer st = new StringTokenizer(subDirs, ftp.lineTerm);
                String sdName = "";
                if (st.hasMoreTokens()) {
                    sdName = st.nextToken();
                }

                if (sdName.length() > 0) {
                    System.out.println("Changing to directory " + sdName);
                    if (ftp.changeDirectory(sdName)) {
                        // just for kicks, try to download the first 3 files in the directory
                        files = ftp.listFiles();
                        st = new StringTokenizer(files, ftp.lineTerm);

                        String fileName;
                        int count = 1;
                        while ((st.hasMoreTokens()) && (count < 3)) {
                            fileName = st.nextToken();
                            System.out.println("Downloading " + fileName + " to C:\\");
                            try {
                                if (ftp.downloadFile(fileName, "C:\\" + fileName)) {
                                    System.out.println("Download successful!");
                                } else {
                                    System.out.println("Error downloading " + fileName);
                                }
                            } catch (Exception de) {
                                System.out.println("ERROR: " + de.getMessage());
                            }

                            count++;
                        }
                    }

                } else {
                    System.out.println("There are no Subdirectories!");
                }

                ftp.logout();
                ftp.disconnect();
                System.out.println("Disconnected and Logged Out.");
            } else {
                System.out.println("Sorry. Could not connect.");
            }
        } catch (Exception e) {
            e.printStackTrace();
            try {
                assert ftp != null;
                ftp.disconnect();
            } catch (Exception e2) {
                System.out.println("Disconnect failed");
            }
        }
    }

    // private function that gets console input from the user
    private static String getStringFromUser(String prompt) throws IOException {
        System.out.print(prompt);
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        return br.readLine();
    }

}
